<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
	protected $guarded = [ 'IDUserFriend' ];
	protected $table = 'friends';
	protected $primaryKey = 'IDUserFriend';


	/*=============== CUSTOM METHODS ===============*/ 

	public function isAddedAsFriend($userTwo) {
        // select * from friends where (IDUserOneID=3 or IDUserTwoID=3) and ActionUserID=4
        
        // \DB::listen(function($query) { var_dump($query->sql); });

        return $this
                ->whereRaw('(IDUserOneID=? or IDUserTwoID=?)', [$userTwo, $userTwo])
                ->where('ActionUserID', auth()->user()->id)
                ->count();
    }

    /*=============== RELATIONSHIP ===============*/ 

	public function user()
	{
		return $this->belongsTo(User::class, 'ActionUserID');
	}
}
