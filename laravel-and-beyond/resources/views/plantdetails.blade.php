@extends('layouts.layout')

@section('plantdetails')
    <h1>{{ $plant->nickname }}</h1>
    <h2>Official name</h2>
    <p>{{ $plant->official_name }}</p>
    <h2>Light</h2>
    <p>{{ $plant->light }}</p>
    <h2>Temperature</h2>
    <p>{{ $plant->temperature }}</p>
    <h2>Humidity</h2>
    <p>{{ $plant->humidity }}</p>
    <h2>Water</h2>
    <p>{{ $plant->water }}</p>
    <h2>Soil</h2>
    <p>{{ $plant->soil }}</p>
    <h2>Plant fertilizer</h2>
    <p>{{ $plant->plant_fertilizer }}</p>
    <h2>Toxic</h2>
    <p>{{ $plant->toxic }}</p>
    <h2>Misting</h2>
    <p>{{ $plant->misting }}</p>
    <h2>Repot</h2>
    <p>{{ $plant->repot }}</p>
    <h2>Air purifying</h2>
    <p>{{ $plant->air_purifying }}</p>
@endsection
