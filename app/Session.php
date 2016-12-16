<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
	protected $guarded = ['IDSession'];
	protected $table = 'sessions';
	protected $primaryKey = 'IDSession';

	public function event()
	{
		return $this->belongsTo(Event::class, 'IDEvent');
	}

	public function timezone()
	{
		return $this->belongsTo(TimeZone::class, 'IDTimeZone');
	}
}
