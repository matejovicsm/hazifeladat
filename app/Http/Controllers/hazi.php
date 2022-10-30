<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class hazi extends Controller
{
    public function pelda(){
        $adatok = DB::select("SELECT * FROM adatok");
    }
    public function urlap(){
        return view("fooldal");
    }
   
}
