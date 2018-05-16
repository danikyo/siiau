<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function section()
    {
        return $this->hasMany('App\Section');
    }

    public function careers()
    {
        return $this->belongsToMany('App\Career');
    }

    public function university()
    {
        return $this->belongsTo('App\University');
    }
}
