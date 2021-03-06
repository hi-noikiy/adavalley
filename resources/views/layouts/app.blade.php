<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <title>{{ config('app.name', 'CMMS') }}</title>
    </head>
    <body class="font-sans antialiased text-black leading-tight flex flex-col min-h-screen">
        @include('partials.header')

        <div id="app" class="container mx-auto flex-1" v-cloak>
            @yield('body')
        </div>

        @include('partials.footer')

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
