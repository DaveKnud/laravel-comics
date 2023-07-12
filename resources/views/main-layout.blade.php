<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">

        @include('components.header')

        <div class="d-flex bg-dark flex-wrap">
            @foreach ($fumetti as $fumetto)
                <div class=" w-25 mx-4">
                    <div class="card my-5 w-100 mx-4" ;>Fumetto
                        <h2>{{ $fumetto['title'] }}</h2>
                        <img src="{{ $fumetto['thumb'] }}" alt="" max-width="100%" max-height="100%"
                            style="height: 100px">
                        <div>{{ $fumetto['price'] }}</div>
                        <div>{{ $fumetto['series'] }}</div>
                        <div>{{ $fumetto['sale_date'] }}</div>
                        <div>{{ $fumetto['type'] }}</div>
                    </div>
                </div>
            @endforeach
        </div>

        @include('components.footer');
        {{-- <a href="{{ route('cards-fumetti') }}">Header </a> --}}
    </main>

</body>

</html>
