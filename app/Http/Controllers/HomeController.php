<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function inicio()
    {
        return view('frontend.inicio');
    }


    public function nosotros()
    {
        return view('frontend.nosotros');
    }

    public function servicios()
    {
        return view('frontend.servicios');
    }

    public function portafolio()
    {
        return view('frontend.portafolio');
    }

    public function contacto()
    {
        return view('frontend.contacto');
    }
}
