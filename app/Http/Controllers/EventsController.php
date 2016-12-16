<?php

namespace App\Http\Controllers;

use App\Event;
use App\Events\NotifyUserContainer;
use App\Invitation;
use App\RoomLayout;
use App\Session;
use App\SessionAttended;
use App\SessionRegistered;
use App\TimeZone;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class EventsController extends Controller
{
	public function event($id)
	{
		$event = Event::findOrFail($id);

		return $event;
	}

	public function getUserTimezone()
	{
		$result =  User::where('id', auth()->user()->id)->select(DB::raw('GMT, UTCTimeZone, GETUTCDATE() ReadinessDate'))->first();
		$timezone = $result->UTCTimeZone . ' | GMT' . $result->GMT;

		return response()->json(['timezone' => $timezone, 'readiness' => $result->ReadinessDate]);
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'EventName' => 'required',
			'Description' => 'required',
			// 'DateOfSession' => 'required',
			// 'TimeOfSession' => 'required',
		]/*, 
		[
			'DateOfSession.required' => 'The scheduled date is not in valid format or it is not set.',
			'TimeOfSession.required' => 'The time is not in valid format or it is not set.',
		]*/);


		// return response()->json(['success' => true]);
		// return $request->all();

		DB::beginTransaction();
		try {
			$userID = auth()->user()->id;
			$readiness = ($request->IDSessionReadiness === false) ? 2 : 1;
			$type = ($request->IDSessionType === false) ? 1 : 2;

			// events insert
			$eventID = DB::table('events')
						->insertGetId([
							'IDUser' => $userID,
							'IDPlace' => $request->IDPlace,
							'EventName' => ucwords($request->EventName),
							'Description' => $request->Description,
							'DateOfEvent' => $request->DateTimeOfEvent,
							'created_at' => Carbon::now(),
							'updated_at' => Carbon::now(),
						]);

		    // session insert
		    $sessionID = DB::table('sessions')
		    			->insertGetId([
					    	'IDEvent' => $eventID,
					    	'IDUser' => $userID,
					    	'IDRoomLayout' => $request->IDRoomLayout,
					    	'IDSessionType' => $type,
					    	'IDSessionReadiness' => $readiness,
							'SessionName' => ucwords($request->EventName),
							'Description' => $request->Description,
							'DateOfSession' => $request->DateTimeOfEvent
		    			]);

		    // sessionregistered insert
		    $sessionregistered = SessionRegistered::create([
		    	'IDSession' => $sessionID,
		    	'IDUser' => $userID,
		    ]);
		} catch (ValidationException $e) {
			DB::rollback();
			throw $e;
		}
		DB::commit();

		return response()->json(['success' => 1, 'eventID' => $eventID]);
	}

	public function update(Request $request, $id)
	{
		$this->validate($request, [
			'EventName' => 'required',
			'Description' => 'required',
			// 'DateOfEvent' => 'required',
			// 'TimeOfSession' => 'required',
		]/*, 
		[
			'DateOfSession.required' => 'The scheduled date is not in valid format or it is not set.',
			'TimeOfSession.required' => 'The time is not in valid format or it is not set.',
		]*/);

		// return $request->all();

		DB::beginTransaction();
		try {
			$userID = auth()->user()->id;
			$readiness = ($request->IDSessionReadiness === false) ? 2 : 1;
			$type = ($request->IDSessionType === false) ? 1 : 2;

			$event = Event::find($id);
			$event->update([
				'IDPlace' => $request->IDPlace,
				'EventName' => $request->EventName,
				'Description' => $request->Description,
				'DateOfEvent' => $request->DateTimeOfEvent
			]);

		    // session insert
		    $session = DB::update('
		    				UPDATE sessions 
		    				SET IDRoomLayout=?, IDSessionType=?, IDSessionReadiness=?, IDTimeZone=?, SessionName=?, Description=?, DateOfSession=?, updated_at=?
		    				WHERE IDSession=?',
					    	[
						    	$request->IDRoomLayout,
						    	$type,
						    	$readiness,
						    	$request->IDTimeZone,
								ucwords($request->EventName),
								$request->Description,
								$request->DateTimeOfEvent,
								Carbon::now(),
								$request->IDSession
						    ]);
		} catch (ValidationException $e) {
			DB::rollback();
			throw $e;
		}
		DB::commit();

		return response()->json(['event' => $event, 'session' => $session]);
	}

	public function remove(Request $request, $id)
	{
		// return $request->sessionID;

		DB::beginTransaction();
		try {
			// events update
			$event = DB::update('UPDATE events SET ActiveOrDeleted=? WHERE IDEvent=?', [0, $id]);

		    // session update
		    $session = DB::update('UPDATE sessions SET ActiveOrDeleted=? WHERE IDSession=?', [0, $request->sessionID]);

		} catch (ValidationException $e) {
			DB::rollback();
			throw $e;
		}
		DB::commit();

		return response()->json(['event' => $event, 'session' => $session]);
	}

	public function getNextEvent()
	{
		$events = Event::with(['user', 'sessions.timezone'])->paginate(2);

		return response()->json(view('partials.events._next', compact('events'))->render());
	}

	public function getAllEventList()
	{
		// DB::listen(function($query) { var_dump($query->sql); });

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

		return $events;
	}

	public function getMyEventList()
	{
		$events = DB::select(DB::raw("
			select s.IDEvent, IDSession, IDPlace, IDSessionReadiness, IDSessionType, 
				s.IDRoomLayout, e.EventName, s.[Description], UserPic, NumberOfSeats,
				CONVERT(date, DateOfEvent) AS DateOfEvent, CONVERT(varchar(10), 
				DateOfEvent, 108) AS TimeOfEvent, datename(WEEKDAY, DateOfEvent) WeekDay, (CONVERT(varchar(15),CAST(DateOfEvent AS TIME),100)) FullTimeOfEvent,
				(datename(month, DateOfEvent) + ' ' + datename(day, DateOfEvent) + ', ' + datename(year, DateOfEvent)) FullDateOfEvent
			from [sessions] s
				join [users] u ON u.id = s.IDUser
				join [events] e ON e.IDEvent = s.IDEvent
				join roomlayouts r ON r.IDRoomLayout = s.IDRoomLayout
			where s.IDUser=? and e.ActiveOrDeleted=1
			order by e.DateOfEvent desc
		"), [auth()->user()->id]);

		return response()->json(['events' => $events]);
	}

	public function getNumberOfSeats($layoutID)
	{
		/*$result = DB::select(DB::raw('
			select NumberOfSeats from roomlayouts where IDRoomLayout=?;
		'), [$layoutID]);*/
		$result = RoomLayout::where('IDRoomLayout', $layoutID)->pluck('NumberOfSeats');

		return $result;
	}

	public function joinEvent(Request $request)
	{
		$datetime = Carbon::now();
		$result = DB::insert('
					INSERT INTO sessionregistered 
						(IDSession, IDUser, created_at, updated_at)
					VALUES
						(?, ?, ?, ?)
				', [$request->IDSession, auth()->user()->id, $datetime, $datetime]);

		return response()->json(['success' => $result]);
	}

	public function getDateOfSession($id)
	{
		$session = DB::select(DB::raw('
			SELECT TOP 1 SessionName, CONVERT(varchar, DateOfSession, 100) DateOfSession, GMT
			FROM sessions s
				JOIN timezones t ON t.IDTimeZone = s.IDTimeZone
			WHERE IDSession=? 
		'), [$id]);

		return $session;
	}

	public function getUserEventsCount()
	{
		$count = Session::where('IDUser', auth()->user()->id)->count();

		return response()->json(['count' => $count]);
	}

	public function getSelectEventList()
	{
		/*
			select s.IDEvent, IDSession, s.IDUser, IDPlace, IDSessionReadiness, IDSessionType, 
                s.IDRoomLayout, s.IDTimeZone, s.SessionName, s.[Description], UserPic, NumberOfSeats,
                (TimeZone + ' ' + GMT)TimeZone, CONVERT(varchar, DateOfSession, 100) DateOfSession, GMT
		 */

        $myEvents = DB::select(DB::raw("
            select s.IDSession, s.SessionName
            from [sessions] s
                join [users] u ON u.id = s.IDUser
                join timezones t ON t.IDTimeZone = s.IDTimeZone
                join [events] e ON e.IDEvent = s.IDEvent
                join roomlayouts r ON r.IDRoomLayout = s.IDRoomLayout
            where s.IDUser=? and e.ActiveOrDeleted=1 and s.ActiveOrDeleted=1
        "), [auth()->user()->id]);

        return $myEvents;
	}

	public function inviteUser(Request $request)
	{
		$user = $request->user();
		$data = $request->concat;

		array_add($request, 'UserWhoInviteID', $user->id);
		array_add($request, 'UserWhoInviteName', $user->Name);

		$result = Invitation::create([
			'IDSession' => $data['IDSession'],
			'UserWhoInviteID' => $request->UserWhoInviteID,
			'UserThatInvitedID' => $request->UserThatInvitedID,
			'GMT' => $data['GMT']
		]);

		/*$result = SessionAttended::create([
			'IDSession' => $request->concat['IDSession'],
			'IDUser' => $request->userID,
			'DateOfJoin' => Carbon::now()
		]);*/


		// Get list of invitations
		event(new NotifyUserContainer);

		// check if user invited is online 
		// if: notify and send email
		// else: send email only

		return response()->json(['result' => $result, 'success' => true]);
	}

	public function eventPagination()
	{
		return $this->getAllEventList();
	}

	public function isUserJoined($sessionID)
	{
		$isJoined = SessionRegistered::where('IDSession', $sessionID)->where('IDUser', auth()->user()->id)->count();

		return $isJoined;
	}
}
