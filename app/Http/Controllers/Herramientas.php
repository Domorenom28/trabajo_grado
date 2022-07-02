<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Herramientas extends Controller
{
    //
    public function inclusiometro(){
        return view ('proyecto.inclusiometro');
    }
    
    public function lenguaje(){
        return view ('proyecto.lenguaje');
    }

    public function foro(){
        return view ('proyecto.foro');
    }

    public function gaming(){
        return view ('proyecto.gaming');
    }

    public function discapacidades(){
        return view ('proyecto.discapacidades');
    }
}