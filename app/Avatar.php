<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends BaseModel
{
	protected $fillable = [ 'UserImg', 'Gender' ];
	protected $table = 'images';
	protected $primaryKey = 'IDUserImg';

	public function setGenderAttribute($gender)
	{
		$this->attributes['gender'] = trim($gender);
	}
}
