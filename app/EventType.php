<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventType extends BaseModel
{
	protected $guarded = [ 'IDEventType' ];
    protected $table = 'eventtypes';
    protected $primaryKey = 'IDEventType';

    public function events()
    {
    	$this->hasMany(Event::class);
    }
}
