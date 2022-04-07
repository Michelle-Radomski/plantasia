@extends('layouts.layout')

@section('myplants')
    <p>Welcome {{ $user->name }}!</p>
    <p>Here is an overview of your plants:</p>
    <section class="plantoverviewcontainer">
        @foreach ($plants as $plant)
            <article class="plantoverviewsmall">
                <h1>{{ $plant->nickname }}</h1>
                <p>{{ $plant->official_name }}</p>
                <a href="myplants/{{ $plant->id }}">More info</a>
            </article>
        @endforeach
    </section>
@endsection
