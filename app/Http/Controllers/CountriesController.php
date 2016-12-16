<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public function getCountriesByID($country)
    {
    	$countryID = Country::where('Country', $country)->first()->IDCountry;
    	
    	return $countryID;
    }
}
