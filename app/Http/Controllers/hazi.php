<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class hazi extends Controller
{
    
    public function urlap(){
        return view("fooldal");
    }
    public function rogzites(Request $req){
        $req->validate(
            [

            ],
            [
                
            ]);
    }
   
}
