<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //

    public function Townships()
    {
        return $this->hasMany('App\Township');
    }
}
