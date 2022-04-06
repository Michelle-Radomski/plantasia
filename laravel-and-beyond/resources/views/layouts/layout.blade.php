<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plantasia</title>
    <link rel="stylesheet" href="{{ asset('app.css') }}">
</head>

<body>
    @include('_partials.header')
    <main>
        @yield('home')
        @yield('myplants')
        @yield('plantdetails')
    </main>
    @include('_partials.footer')
</body>

</html>
