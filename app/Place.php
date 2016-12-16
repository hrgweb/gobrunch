<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends BaseModel
{
    protected $guarded = [ 'IDPlace' ];
    protected $table = 'places';
    protected $primaryKey = 'IDPlace';

    public function setPlaceNameAttribute($name)
    {
    	$this->attributes['PlaceName'] = ucwords($name);
    }

    public function events()
    {
    	return $this->hasMany(Event::class);
    }
}
