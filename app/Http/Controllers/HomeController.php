<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $title = 'Inicio | ';
        return view('home.index', [
            'title' => $title
        ]);
    }


    /**
     * Show the user dashboard.
     */

    public function home()
    {
        return view('home.home');
    }
}
