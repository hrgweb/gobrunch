<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends BaseModel
{
    protected $table = 'countries';
    protected $primaryKey = 'IDCountry';

    public function setCountryAttribute($country)
    {
    	$this->attributes['country'] = ucwords($country);
    }

    public function user()
    {
    	return $this->hasMany(User::class);
    }
}
