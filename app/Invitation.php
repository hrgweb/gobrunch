<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $guarded = ['IDInvitation'];
	protected $table = 'invitations';
	protected $primaryKey = 'IDInvitation';
	protected $dates = ['DateOfSession'];
}
