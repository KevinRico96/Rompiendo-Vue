<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function mostrarIndex(){

        return view('templates/index');
    }

    function mostrarEmpresas(){

        return view ('empresas');
    }
}
