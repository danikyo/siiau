<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoogleDrive extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
