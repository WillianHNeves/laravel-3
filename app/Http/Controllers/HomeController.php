<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function firstBlade()
    {
        return view('blade');
    }

    public function infoAct()
    {
        return view('viewAct');
    }
}
