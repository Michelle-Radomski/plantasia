@extends('layouts.layout')

@section('content')
    <section class="formcontainer">
        <form action="{{ route('update_form', ['id' => $plant->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="nickname">Nickname</label>
                <input type="text" id="nickname" name="nickname" value="{{ $plant->nickname }}"><br>
            </div>

            <div>
                <label for="official_name">Official name</label>
                <input type="text" id="official_name" name="official_name" value="{{ $plant->official_name }}"><br>
            </div>

            <div>
                <label for="water">Watering</label>
                <input type="text" id="water" name="water" value="{{ $plant->water }}"><br>
            </div>

            <div>
                <label for="light">Light</label>
                <input type="text" id="light" name="light" value="{{ $plant->light }}"><br>
            </div>

            <div>
                <label for="temperature">Temperature</label>
                <input type="text" id="temperature" name="temperature" value="{{ $plant->temperature }}"><br>
            </div>

            <div>
                <label for="humidity">Humidity</label>
                <input type="text" id="humidity" name="humidity" value="{{ $plant->humidity }}"><br>
            </div>

            <div>
                <label for="misting">Misting</label>
                <select id="misting" name="misting" value="{{ $plant->misting }}">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="optionally">Optionally</option>
                </select><br>
            </div>

            <div>
                <label for="soil">Type of soil</label>
                <input type="text" id="soil" name="soil" value="{{ $plant->soil }}"><br>
            </div>

            <div>
                <label for="plant_fertilizer">Plant fertilizer</label>
                <input type="text" id="plant_fertilizer" name="plant_fertilizer"
                    value="{{ $plant->plant_fertilizer }}"><br>
            </div>

            <div>
                <label for="toxic">Toxic</label>
                <select id="toxic" name="toxic" value="{{ $plant->toxic }}">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select><br>
            </div>

            <div>
                <label for="repot">Repot</label>
                <input type="text" id="repot" name="repot" value="{{ $plant->repot }}"><br>
            </div>

            <div>
                <label for="air_purifying">Air purifying</label>
                <select id="air_purifying" name="air_purifying" value="{{ $plant->air_purifying }}">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select><br>
            </div>

            <div>
                <label for="image">Picture</label>
                <input type="file" id="image" name="image">
            </div>

            <input type="submit" name="update" value="UPDATE" class="button">
        </form>
    </section>
@endsection
