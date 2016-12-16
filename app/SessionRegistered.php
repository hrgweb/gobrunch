<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SessionRegistered extends Model
{
	protected $guarded = ['IDSessionRegistered'];
	protected $table = 'sessionregistered';
	protected $primaryKey = 'IDSessionRegistered';
}
