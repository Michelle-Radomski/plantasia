@extends('layouts.layout')

@section('create')
    <section>
        <form action="" method="post">
            @csrf
            <label for="nickname">Nickname</label>
            <input type="text" id="nickname" name="nickname"><br>

            <label for="official_name">Official name</label>
            <input type="text" id="official_name" name="official_name"><br>

            <label for="water">Watering</label>
            <input type="text" id="water" name="water"><br>

            <label for="light">Light</label>
            <input type="text" id="light" name="light"><br>

            <label for="temperature">Temperature</label>
            <input type="text" id="temperature" name="temperature"><br>

            <label for="humidity">Humidity</label>
            <input type="text" id="humidity" name="humidity"><br>

            <label for="misting">Misting</label>
            <select id="misting" name="misting">
                <option value="yes">Yes</option>
                <option value="no">No</option>
                <option value="optionally">Optionally</option>
            </select><br>

            <label for="soil">Type of soil</label>
            <input type="text" id="soil" name="soil"><br>

            <label for="plant_fertilizer">Plant fertilizer</label>
            <input type="text" id="plant_fertilizer" name="plant_fertilizer"><br>

            <label for="toxic">Toxic</label>
            <select id="toxic" name="toxic">
                <option value="yes">Yes</option>
            </select><br>

            <label for="repot">Repot</label>
            <input type="text" id="repot" name="repot"><br>

            <label for="air_purifying">Air purifying</label>
            <select id="air_purifying" name="air_purifying">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select><br>

            <input type="submit" value="Add">
        </form>
    </section>
@endsection
