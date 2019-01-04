<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pse;

class PruebaController extends Controller
{
    public function Index(){
      $pse = new Pse;
      echo var_dump($pse->services->getBankList());
    }
}
