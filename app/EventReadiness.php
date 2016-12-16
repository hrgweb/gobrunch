<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventReadiness extends Model
{
    protected $guarded = [ 'IDEventReadiness' ];
    protected $table = 'eventreadiness';
    protected $primaryKey = 'IDEventReadiness';
    
    public function events()
    {
    	$this->hasMany(Event::class);
    }
}
