<?php

namespace App\Http\Controllers;

use App\Events\FriendList;
use App\Events\FriendRequest;
use App\Events\WhoseOnline;
use App\Friend;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Lang;
use Intervention\Image\Facades\Image;

class UsersController extends Controller
{
    private $userID;
    private $onlineUsers;
    private $connectStatusID;

    public function register(Request $request)
    {
    	$this->validate($request, [
    		'Name' => 'required',
    		'Title' => 'required',
    		'Company' => 'required',
    		'email' => 'required|email|unique:users',
    		'password' => 'required',
    		'UserPic' => 'required'
    	]);

        // return response()->json($request->all());

        if ($request->ajax()) {
            $avatar = '';

            if ($request->ImgType == 'camera') {
                $file = $request->file('UserPic');
                $avatar = time() . '.' . $file->getClientOriginalExtension();
                $pathFolder = public_path() . '\images\\';

                // upload image
                Image::make($file)->resize(200, 200)->save($pathFolder . $avatar, 50);
            }
            // post to db
            $user = new User;
            $user->Name = $request->Name;
            $user->Title = $request->Title;
            $user->Company = $request->Company;
            $user->IDCountry = $request->IDCountry;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->Gender = $request->Gender;
            $user->UserPic = ($avatar) ? $avatar : $request->UserPic;
            $user->isImage = $request->isImage;
            $user->isOnline = true;
            $user->LastLoginDate = $request->LastLoginDate;
            $user->GMT = $request->GMT;
            $user->UTCTimeZone = $request->UTCTimeZone;
            $user->save();

            Auth::login($user, true);

            // Fire the events
            $this->eventsWhoseOnlineAndFriendList();

            return response()->json(['success' => true]);
        }
    }

    private function updateIsOnlineColumn($isOnline, $lastLogin, $gmt, $timezone)
    {
        $params = [
            'isOnline' => $isOnline,
            'LastLoginDate' => $lastLogin,
            'GMT' => $gmt,
            'UTCTimeZone' => $timezone
        ];

        DB::table('users')->where('id', auth()->user()->id)->update($params);
    }

    private function eventsWhoseOnlineAndFriendList()
    {
        $usersOnline = $this->listOfOnline();       // Online Users
        $friendsOnline = $this->friendListQuery();  // Friends Of Users

        // Fired WhoseOnline events when user logged in
        event(new WhoseOnline($usersOnline));
        event(new FriendList($friendsOnline));
    }

    public function signin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            // lets update is isOnline column set to 1
            $data = $request->concat;
            $this->updateIsOnlineColumn(1, $data['LastLoginDate'], $data['GMT'], $data['UTCTimeZone']);

            // Fire the events
            $this->eventsWhoseOnlineAndFriendList();

            return response()->json(['success' => true]);
        }

        return response()->json(['error' => 'Invalid username or password.', 'success' => false]);
    }

    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'current_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user = Auth::user();

        if (Hash::check($request->current_password, $user->password)) {
            // update user password
            DB::table('users')->where('id', $user->id)->update(['password' => bcrypt($request->password)]);

            session()->flash('message', 'Your password has been reset!');

            return back();
        }

        return redirect()->back()
            ->withErrors(['errors' => 'Invalid current password.']);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'Name' => 'required',
            'Title' => 'required',
            'Company' => 'required',
        ]);

        // return response()->json($request->all());

        if ($request->ajax()) {
            $avatar = '';

            if ($request->ImgType == 'camera') {
                $file = $request->file('UserPic');
                $avatar = time() . '.' . $file->getClientOriginalExtension();
                $pathFolder = public_path() . '\images\\';

                // Delete previous image of user
                $previousAvatar = $request->user()->UserPic;

                // return $previousAvatar;
                $user = $request->user();
                ($user->isImage) && unlink($pathFolder . $user->UserPic);

                // upload image
                Image::make($file)->resize(200, 200)->save($pathFolder . $avatar, 50);
            }

            // update db
            DB::table('users')
                ->where('id', $request->user()->id)
                ->update([
                    'Name' => ucwords($request->Name),
                    'Title' => ucwords($request->Title),
                    'Company' => ucwords($request->Company),
                    'IDCountry' => $request->IDCountry,
                    'Gender' => ucwords($request->Gender),
                    'UserPic' => ($avatar) ? $avatar : $request->UserPic,
                    'isImage' => $request->isImage,
                ]);

            session()->flash('message', 'Your account has been updated!');

            return response()->json(['success' => true]);
        }
    }

    public function addFriend(Request $request)
    {
        $friend = new Friend;
        $isFriend = $friend->isAddedAsFriend($request->receiver_id);

        // Check if the selected user id already added as friend
        if ($isFriend) {
            return response()->json(['isFriend' => $isFriend]);
        }
        else {
            array_pull($request, 'receiver_id'); // remove the key receiver_id

            $result = Auth::user()->friends()->create($request->all());
            
            event(new FriendRequest());

            return response()->json(['result' => $result]);
        }
    }

    public function connectionStatus()
    {
        $transactionResult = DB::transaction(function () {
            // insert into notification table
            DB::insert('INSERT INTO notifications (FriendID, SendRequestID, AcceptRequestID, created_at, updated_at) VALUES (?, ?, ?, ?, ?)', [request()->friendID, request()->user_one, request()->user_two, Carbon::now(), Carbon::now()]);
            
            // update the friends table
            DB::table('friends')
                ->where('IDUserFriend', request()->friendID)
                ->update(['IDConnectionStatus' => $this->connectStatusID]);
        });

        // events fired
        $this->eventsWhoseOnlineAndFriendList();

        return response()->json(['result' => $transactionResult]);
    }

    public function acceptFriend()
    {   
        $this->connectStatusID = 2;

        return $this->connectionStatus();
    }

    public function declineFriend()
    {
        $this->connectStatusID = 3;

        return $this->connectionStatus();
    }

    public function notifyUserIfFriendRequestAccepted($actionUserID)
    {
        $user_two = auth()->user()->id;
        $result = DB::select(DB::raw('
            SELECT u.id AS IDUserOneID, IDUserTwoID, ActionUserID, Name, IDConnectionStatus
            FROM friends f
                JOIN users u ON u.id = f.ActionUserID
            WHERE (IDUserOneID='.$actionUserID.' OR IDUserOneID='.$user_two.') 
                AND (IDUserTwoID='.$user_two.' OR IDUserTwoID='.$user_two.')
        '));

        return response()->json(['result' => $result]);
    }

    private function listOfOnline()
    {
        // DB::listen(function($query) { var_dump($query->sql); });
        
        $onlineUsers = DB::select(DB::raw('
            select u.id, UserPic, Name, Company, Title, Country
            from users u
                join countries c on c.IDCountry = u.IDCountry
            where u.isOnline = 1 and u.id != :userID
            order by Name
        '), ['userID' => auth()->user()->id]);

        return $onlineUsers;
    }

    public function whoseOnline()
    {
        $this->onlineUsers = $this->listOfOnline();

            return response()->json($this->onlineUsers);
    }

    /*public function isAddFriendAlready($idToBeAdded)
    {
        $this->userID = auth()->user()->id;

        $isAddedAsFriend = Friend::where('IDUserOneID', $this->userID)->orWhere('IDUserTwoID', $this->userID)->where('ActionUserID', $idToBeAdded)->count();
        $isAddedAsFriend = ($isAddedAsFriend > 0) ? true : false;

        return response()->json(['isAddedAsFriend' => $isAddedAsFriend]);
    }*/

    public function friendRequest()
    {
        // $sql = DB::listen(function($query) { var_dump($query->sql); });

        $userID = auth()->user()->id;
        $friendRequest = DB::table('friends')
                            ->join('users', 'users.id', '=', 'friends.ActionUserID')
                            ->whereRaw('(IDUserOneID=? OR IDUserTwoID=?)', [$userID, $userID])
                            ->where('IDConnectionStatus', 1)
                            ->where('ActionUserID', '!=', $userID)
                            ->select('friends.*', 'Name', 'Title', 'Company', 'Gender', 'UserPic')
                            ->get();


        return response()->json($friendRequest);   
    }

    private function friendListQuery()
    {
        // DB::listen(function($query) { var_dump($query->sql); });

        $userID = auth()->user()->id;
        return DB::select(DB::raw('
            select Name, Title, Company, c.Country, Gender, UserPic, isOnline
            from users
                join countries c on c.IDCountry = users.IDCountry
                join
                    (
                        select IDUserOneID as id from friends
                        where (IDUserOneID = ? OR IDUserTwoID = ?)
                            and (IDConnectionStatus = 2)
                        union
                        select idusertwoid as id from friends
                        where (iduseroneid = ? OR idusertwoid = ?)
                            and (idconnectionstatus = 2)
                    ) MyFriends
                on users.id = myfriends.id
            where users.id <> ?
            order by Name asc

        '), [$userID, $userID, $userID, $userID, $userID]);
    }

    public function friendList()
    {
        $onlineFriends = $this->friendListQuery();

        return response()->json($onlineFriends);
    }

    public function logout()
    {
        // lets update is isOnline column set to 0
        DB::table('users')->where('id', auth()->user()->id)->update(['isOnline' => 0]);
        
        // Fire the events
        $this->eventsWhoseOnlineAndFriendList();

        Auth::logout();

        return redirect('home');
    }

    public function userCurrentEvent()
    {
        // DB::listen(function($query) { var_dump($query->sql); });

        $result = DB::select(DB::raw('
            select id, SessionName, Name, Company, Title, Country, u.isOnline--, CONVERT(Date, e.DateOfEvent) AS DateOfEvent
            from [users] u
                left join [events] e on u.nowatidevent = e.idevent
                inner join countries c on u.IDCountry = c.IDCountry
            where u.isOnline = 1
        '));

        return response()->json(['result' => $result]);
    }

    public function notifyUser()
    {
        $query = DB::select(DB::raw('
            --SELECT IDUserFriend, NotificationID, Name, SendRequestID, AcceptRequestID, IDConnectionStatus
            SELECT NotificationID, Name, UserPic
            FROM notifications n
                JOIN users u ON u.id = n.AcceptRequestID
                JOIN friends f ON f.IDUserFriend = n.FriendID
            WHERE n.SendRequestID='.auth()->user()->id.' AND f.IDConnectionStatus = 2 AND isNotified=0
        '));

        return $query;
    }

    public function isSenderNotified($id)
    {
        $result = DB::update('UPDATE notifications SET isNotified=1 WHERE NotificationID=?', [$id]);

        return response()->json(['result' => $result]);
    }

    public function getUserID()
    {
        if (Auth::check()) {
            return auth()->user()->id;
        }
    }
}
