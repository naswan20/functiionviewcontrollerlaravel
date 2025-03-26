<?php

namespace App\http\controllers;

use Illuminate\http\Request;

class helloworldcontroller extends controller
{
    public function index()
    {
        return "selamat belajar framework laravel 10";
    }
    public function ambilfile()
    {
        return view('ambilfile');
    }
}
