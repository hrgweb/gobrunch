<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
	protected $guarded = ['NotificationID'];
	protected $table = 'notifications';
	protected $primaryKey = 'NotificationID';
}
