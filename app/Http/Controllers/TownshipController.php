<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Township;
use App\City;

class TownshipController extends Controller
{
   public function townToCity(){
       $town_name = Township::find(3);
       return $town_name->QCenter;
   }
}
