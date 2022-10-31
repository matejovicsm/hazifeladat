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
                "vezeteknev"=>"required|min:1|max:100",
                "keresztnev"=>"required|min:1|max:100",
                "szuletesi_ev"=>"required|numeric|min:1900|max:2022"

            ],
            [
                "vezeteknev.required"=>"A mező kitöltése kötelező!",
                "vezeteknev.min"=>"Minimum 1 karaktert írjon be!",
                "vezeteknev.max"=>"Maximum 100 karaktert írhat be!",
                "keresztnev.required"=>"A mező kitöltése kötelező!",
                "keresztnev.min"=>"Minimum 1 karaktert írjon be!",
                "keresztnev.max"=>"Maximum 100 karaktert írhat be!",
                "szuletesi_ev.required"=>"A mező kitöltése kötelező!",
                "szuletesi_ev.numeric"=>"Csak számot adhat meg!",
                "szuletesi_ev.min"=>"Minimum 1900 lehet!",
                "szuletesi_ev.max"=>"Maximum 2022 lehet!"

            ]);
            DB::insert("INSERT INTO adatok (vezeteknev, keresztnev, szuletesi_ev) VALUES (?,?,?)",[$req->get('vezeteknev'),$req->get('keresztnev'),$req->get('szuletesi_ev')]);
    }
   
}
