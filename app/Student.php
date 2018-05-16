<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * Get the user that owns the student.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function career()
    {
        return $this->belongsTo('App\Career');
    }

    public function sections()
    {
        return $this->belongsToMany('App\Section');
    }

    public function payorder()
    {
        return $this->hasOne('App\PayOrder');
    }
}
