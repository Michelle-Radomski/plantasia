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

    public function store(Request $request)
    {
        $plant = new Plant;
        $plant->nickname = $request->nickname;
        $plant->official_name = $request->official_name;
        $plant->water = $request->water;
        $plant->light = $request->light;
        $plant->temperature = $request->temperature;
        $plant->humidity = $request->humidity;
        $plant->misting = $request->misting;
        $plant->soil = $request->soil;
        $plant->plant_fertilizer = $request->plant_fertilizer;
        $plant->toxic = $request->toxic;
        $plant->repot = $request->repot;
        $plant->air_purifying = $request->air_purifying;
        $plant->save();
        return redirect('myplants');
    }

    public function updateView(Request $request)
    {
        $id = $request->id;
        $plant = Plant::find($id);
        return view('update', ['plant' => $plant]);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $plant = Plant::find($id);

        $plant->nickname = $request->nickname;
        $plant->official_name = $request->official_name;
        $plant->water = $request->water;
        $plant->light = $request->light;
        $plant->temperature = $request->temperature;
        $plant->humidity = $request->humidity;
        $plant->misting = $request->misting;
        $plant->soil = $request->soil;
        $plant->plant_fertilizer = $request->plant_fertilizer;
        $plant->toxic = $request->toxic;
        $plant->repot = $request->repot;
        $plant->air_purifying = $request->air_purifying;
        $plant->save();
        return redirect()->route('plantdetails', ['id' => $plant->id]);
    }
}
