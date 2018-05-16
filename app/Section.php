<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }

    public function university()
    {
        return $this->belongsTo('App\University');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }

    public function classroom()
    {
        return $this->belongsTo('App\Classroom');
    }

    public function students()
    {
        return $this->belongsToMany('App\Student');
    }
}
