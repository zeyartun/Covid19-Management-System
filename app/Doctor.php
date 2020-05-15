<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //

    public function QCenter()
    {
        return $this->belongsTo('App\QCenter');
    }
}
