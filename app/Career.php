<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    public function student()
    {
        return $this->hasMany('App\Student');
    }

    public function subjects()
    {
        return $this->belongsToMany('App\Subject');
    }
}
