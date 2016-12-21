<?php

namespace App\Http\Controllers;

use App\Country;
use App\Event;
use App\Events\WhoseOnline;
use App\Http\Controllers\UsersController;
use App\Http\Requests;
use App\Place;
use App\RoomLayout;
use App\TimeZone;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    function __construct()
    {
        $this->middleware('auth')->only('office', 'lobby', 'account', 'event');
        $this->middleware('guest')->except('office', 'lobby', 'account', 'event', 'about', 'contact');
    }

    public function index()
    {
    	// return view('pages.index');
        return view('pages.home');
    }

    public function office()
    {
    	return view('pages.office');
    }

    public function lobby()
    {
        $layouts = RoomLayout::all();
        $places = Place::all();
        $timezones = TimeZone::all();

        /*return \DB::table('invitations as i')
                    ->join('sessions as s', 's.IDSession', '=', 'i.IDSession')
                    ->join('users as u', 'u.id', '=', 'i.UserWhoInviteID')
                    ->where('UserThatInvitedID', auth()->user()->id)
                    ->where('isAccepted', 0)
                    ->select('u.Name', 's.SessionName', 's.DateOfSession', 'i.GMT')
                    ->get();*/

        // All Events
        $events = DB::table('sessions as s')
                        ->join('users as u', 'u.id', '=', 's.IDUser')
                        ->join('events as e', 'e.IDEvent', '=', 's.IDEvent')
                        ->join('roomlayouts as r', 'r.IDRoomLayout', '=', 's.IDRoomLayout')
                        ->join('sessiontypes as st', 'st.IDSessionType', '=', 's.IDSessionType')
                        ->where('e.ActiveOrDeleted', 1)
                        ->where('s.ActiveOrDeleted', 1)
                        ->where('s.IDSessionType', '!=', 2)
                        ->select(
                            DB::raw("
                                s.IDEvent, IDSession, s.IDUser, IDPlace, IDSessionReadiness, s.IDSessionType, 
                                s.IDRoomLayout, e.EventName, s.[Description], UserPic, NumberOfSeats,
                                CONVERT(date, DateOfEvent) AS DateOfEvent, CONVERT(varchar(10), 
                                DateOfEvent, 108) AS TimeOfEvent
                            "))
                        ->orderBy('DateOfEvent', 'desc')
                        ->paginate(5);


        return view('pages.lobby', compact('layouts', 'places', 'timezones', 'events'));
    }

    public function account()
    {
        $user = Auth::user();
        $countries = Country::orderBy('Country')->get();

    	return view('pages.account', compact('user', 'countries'));
    }

    public function about()
    {
    	return view('pages.about');
    }

    public function contact()
    {
    	return view('pages.contact');
    }

    public function event()
    {
        return view('pages.event');
    }

    public function home()
    {
        return view('pages.home');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function register()
    {
        $user = new \App\User;
        $countries = Country::orderBy('Country')->get();

        return view('pages.register', compact('user', 'countries'));
    }
}
