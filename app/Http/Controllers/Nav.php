<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Nav extends Controller
{
    //
    public function conceptos(){
        return view ('proyecto.conceptos');
    }
    
    public function leyes(){
        return view ('proyecto.leyes');
    }

    public function herramientas(){
        return view ('proyecto.herramientas');
    }
}
