<?php

namespace App\Http\Controllers;

use App\Avatar;
use App\Http\Requests;
use Illuminate\Http\Request;

class AvatarsController extends Controller
{
	public function getByGender($gender)
	{
		$avatars = Avatar::where('Gender', $gender)->get();

		if (request()->ajax()) {
			return response()->json( $avatars );
		}
	}
}
