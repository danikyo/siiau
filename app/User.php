<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the student associated with the user.
     */
    public function student()
    {
        return $this->hasOne('App\Student');
    }

    public function tacher()
    {
        return $this->hasOne('App\Teacher');
    }

    public function googledrive()
    {
        return $this->hasOne('App\GoogleDrive');
    }
}
