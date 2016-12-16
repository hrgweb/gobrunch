<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SessionAttended extends Model
{
	protected $guarded = ['IDSessionAttended'];
	protected $table = 'sessionattended';
	protected $primaryKey = 'IDSessionAttended';
	protected $dates = ['DateOfJoin', 'DateOfExit'];

}
