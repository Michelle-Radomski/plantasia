@extends('layouts.layout')

@section('content')
    <section class="plantoverviewcontent">
        <p>Welcome {{ $user->name }}!</p>
        <p>Here is an overview of your plants:</p>
        <section id="plantoverviewcontainer" class="container">
            @foreach ($plants as $plant)
                <article class="plantoverviewarticle">
                    <h1>{{ $plant->nickname }}</h1>
                    <p>{{ $plant->official_name }}</p>
                    <a href="{{ route('myplants') }}/{{ $plant->id }}">More info</a>
                </article>
            @endforeach
        </section>
        <a href="{{ route('addplant') }}" class="button">ADD</a>
    </section>
@endsection
