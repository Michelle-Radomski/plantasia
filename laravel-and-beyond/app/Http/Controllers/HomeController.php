<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plant;
use App\Models\User;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function plantsOverview()
    {
        // $plant = Plant::find(1);
        $user = User::find(1);
        $plants = Plant::all();
        return view('myplants', ['plants' => $plants, 'user' => $user]);
    }

    //TODO: CREATE DETAIL PAGE FOR SPECIFIC PLANT
    public function plantDetails(Request $request)
    {
        $id = $request->id;
        $plant = Plant::find($id);
        return view('plantdetails', ['plant' => $plant]);
    }

    public function create()
    {
        return view('create');
    }
}
