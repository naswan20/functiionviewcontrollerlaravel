<?php

namespace App\http\controllers;

use Illuminate\http\Request;

class htmlcontroller extends controller
{
    public function getlorem()
    {
        return view('v_html.getlorem');
    }
}
