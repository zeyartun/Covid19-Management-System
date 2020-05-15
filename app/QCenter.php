<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QCenter extends Model
{
    //

    public function Township()
    {
        return $this->belongsTo('App\Township');
    }

    public function patient()
    {
        return $this->hasMany('App\patient');
    }

    public function Doctor()
    {
        return $this->hasMany('App\Doctor');
    }
}
