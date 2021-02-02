<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Laravel Edo | @yield('title')</title>
</head>

<body>
    <img src="{{ asset('img/wave.jpg') }}" alt="forest" class="w-screen h-screen object-cover fixed z-0 inset-0">
    <div class="d-w d-h d-bg-transparent relative z-10 m-16 rounded-3xl overflow-hidden">
        <div class="flex h-full">
            <nav class="w-48 p-4 flex flex-col">
                <div class="font-bold text-xl mb-4">Dani Edo</div>
                <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'text-blue-600 font-bold ' : '' }}mb-2 hover:font-extrabold hover:no-underline">Home</a>
                <a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'text-blue-600 font-bold ' : '' }}mb-2 hover:font-extrabold hover:no-underline">About</a>
                <a href="{{ url('/data') }}" class="{{ Request::is('data') ? 'text-blue-600 font-bold ' : '' }}mb-2 hover:font-extrabold hover:no-underline">Data</a>
            </nav>
            <div class="d-bg-semi-transparent p-4 flex-grow overflow-scroll">
                <h1 class="mb-4 text-5xl font-bold mt-3">@yield('subtitle')</h1>
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
