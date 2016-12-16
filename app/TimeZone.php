<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeZone extends BaseModel
{
    protected $guarded = [ 'IDTimeZone' ];
    protected $table = 'timezones';
    protected $primaryKey = 'IDTimeZone';

}
