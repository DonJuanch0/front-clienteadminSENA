<?php

namespace App\Http\Controllers;

class HomeController extends ClientController
{
    public function index()
    {
        return view('home');
    }
}
