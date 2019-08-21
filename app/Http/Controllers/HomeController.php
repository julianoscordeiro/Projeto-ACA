<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class siteController extends Controller{

    public function index(){
        $title = "Inicio";

        return view('home.index');
    }


}