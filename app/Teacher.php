<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /**
     * Get the user that owns the teacher.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function job()
    {
        return $this->belongsTo('App\Job');
    }

    public function department()
    {
        return $this->belongsTo('App\Department');
    }
}
