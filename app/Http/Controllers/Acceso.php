<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class acceso extends Controller
{
    //
public function acceso(){
    return view ('proyecto.acceso');
}

public function registro(){
    return view ('proyecto.registro');
}

}