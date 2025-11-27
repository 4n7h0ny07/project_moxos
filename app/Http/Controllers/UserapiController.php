<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class UserapiController extends Controller
{
    //

    public function index (){
        return response()->json(Personas::all());
    }


    public function show ($code){
        return response()->json(Personas::find($code));
    }
}
