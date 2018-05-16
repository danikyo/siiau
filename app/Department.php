<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function teacher()
    {
        return $this->hasMany('App\Teacher');
    }

    public function university()
    {
        return $this->belongsTo('App\University');
    }
}
