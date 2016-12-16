<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends BaseModel
{
    protected $guarded = [ 'IDEvent' ];
    protected $table = 'events';
    protected $primaryKey = 'IDEvent';
    protected $touches = [ 'user', 'roomlayout', 'place' ];
    protected $dates = [ 'DateOfEvent' ];

    public function setEventNameAttribute($sessionName)
    {
    	$this->attributes['EventName'] = ucwords($sessionName);
    }

    public function setDateOfEventAttribute($date)
    {
        $this->attributes['DateOfEvent'] = Carbon::parse($date);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'IDUser');
    }

    public function roomlayout()
    {
    	return $this->belongsTo(RoomLayout::class, 'IDRoomLayout');
    }

    public function place()
    {
    	return $this->belongsTo(Place::class, 'IDPlace');
    }

    public function eventtype()
    {
    	return $this->belongsTo(EventType::class, 'IDEventType');
    }

    public function eventreadiness()
    {
    	return $this->belongsTo(EventReadiness::class, 'IDEventReadiness');
    }

    public function sessions()
    {
        return $this->hasMany(Session::class, 'IDEvent');
    }
}
