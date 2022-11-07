<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{   // la fonction renvoie vers le templating de la page home du site
    public function index(){
        return view('index');
    }
}
