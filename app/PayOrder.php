<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PayOrder extends Model
{
    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
