<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    public function department()
    {
        return $this->hasMany('App\Department');
    }

    public function subject()
    {
        return $this->hasMany('App\Subject');
    }
}
