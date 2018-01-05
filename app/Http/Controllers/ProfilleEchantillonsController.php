<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilleEchantillonsController extends Controller
{
    public function  add(){
            return view('/ProfilleEchantillons/add');
    }
    public function addtobd(){
       \App\ProfilleEchantillon::create();
    }
    public function update(){
     $allresult= \App\ProfilleEchantillon::all();

    }

    //
}
