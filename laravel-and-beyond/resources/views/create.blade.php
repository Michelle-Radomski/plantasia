@extends('layouts.layout')

@section('create')
    <section class="formcontainer">
        <form action="" method="post">
            @csrf
            <div>
                <label for="nickname">Nickname</label>
                <input type="text" id="nickname" name="nickname"><br>
            </div>

            <div>
                <label for="official_name">Official name</label>
                <input type="text" id="official_name" name="official_name"><br>
            </div>

            <div>
                <label for="water">Watering</label>
                <input type="text" id="water" name="water"><br>
            </div>

            <div>
                <label for="light">Light</label>
                <input type="text" id="light" name="light"><br>
            </div>

            <div>
                <label for="temperature">Temperature</label>
                <input type="text" id="temperature" name="temperature"><br>
            </div>

            <div>
                <label for="humidity">Humidity</label>
                <input type="text" id="humidity" name="humidity"><br>
            </div>

            <div>
                <label for="misting">Misting</label>
                <select id="misting" name="misting">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="optionally">Optionally</option>
                </select><br>
            </div>

            <div>
                <label for="soil">Type of soil</label>
                <input type="text" id="soil" name="soil"><br>
            </div>

            <div>
                <label for="plant_fertilizer">Plant fertilizer</label>
                <input type="text" id="plant_fertilizer" name="plant_fertilizer"><br>
            </div>

            <div>
                <label for="toxic">Toxic</label>
                <select id="toxic" name="toxic">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select><br>
            </div>

            <div>
                <label for="repot">Repot</label>
                <input type="text" id="repot" name="repot"><br>
            </div>

            <div>
                <label for="air_purifying">Air purifying</label>
                <select id="air_purifying" name="air_purifying">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select><br>
            </div>

            <input type="submit" value="Add" class="button">
        </form>
    </section>
@endsection
