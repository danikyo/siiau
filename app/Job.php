<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /**
     * Get the teachers for the job.
     */
    public function teacher()
    {
        return $this->hasMany('App\Teacher');
    }
}
