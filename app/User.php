<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'IDCountry', 'IDUserImg', 'UserPic', 'Name', 'FirstName', 'LastName', 'email', 'username', 'password', 'Title', 'Company', 'Gender'
    ];
    protected $table = 'users';
    protected $primaryKey = 'id';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setFirstNameAttribute($firstname)
    {
        $this->attributes['FirstName'] = ucwords($firstname);
    }

    public function setLastNameAttribute($lastname)
    {
        $this->attributes['LastName'] = ucwords($lastname);
    }

    public function setNameAttribute($name)      
    {
        $this->attributes['Name'] = ucwords($name);
    }

    public function setTitleAttribute($title)
    {
        $this->attributes['Title'] = ucwords($title);
    }

    public function setCompanyAttribute($company)
    {
        $this->attributes['Company'] = ucwords($company);
    }

    public function setGender($gender)
    {
        $this->attributes['Gender'] = trim($gender);
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    /*=============== CUSTOM METHODS ===============*/  

    

    /*=============== RELATIONSHIP ===============*/ 

    public function country()
    {
        return $this->belongsTo(Country::class, 'IDCountry');
    }

    public function events()
    {
        return $this->hasMany(Event::class, 'IDUser');
    }

    public function friends()
    {
        return $this->hasMany(Friend::class, 'ActionUserID');
    }
}
