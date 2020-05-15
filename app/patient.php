<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    //

    public function QCenter()
    {
        return $this->belongsTo('App\QCenter');
    }
}
