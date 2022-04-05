<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plant;

class HomeController extends Controller
{
    public function home()
    {
        $plant = Plant::find(1);
        return view('home', ['plant' => $plant]);
    }
}
