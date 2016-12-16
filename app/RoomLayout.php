<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomLayout extends BaseModel
{
    protected $guarded = [ 'IDRoomLayout' ];
    protected $table = 'roomlayouts';
    protected $primaryKey = 'IDRoomLayout';

    public function events()
    {
    	return $this->hasMany(Event::class);
    }
}
