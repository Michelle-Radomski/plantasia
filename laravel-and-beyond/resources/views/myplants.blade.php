@extends('layouts.layout')

@section('myplants')
    <p>Welcome user!</p>
    <p>Here is an overview of your plants:</p>
    <table>
        <thead>
            <tr>
                <th>Nickname</th>
                <th>Official name</th>
                <th>Light</th>
                <th>Temperature</th>
                <th>Humidity</th>
                <th>Water</th>
                <th>Soil</th>
                <th>Plant fertilizer</th>
                <th>Toxic</th>
                <th>Misting</th>
                <th>Repot</th>
                <th>Air purifying</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Doe</td>
                <td>John</td>
            </tr>
            <tr>
                <td>Doe</td>
                <td>Jane</td>
            </tr>
        </tbody>
    </table>
@endsection
