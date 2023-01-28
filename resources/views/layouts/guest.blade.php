<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Swayam Ki Khoj') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <link href="{{asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/fontawesome.css')}}">
        <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/templatemo-stand-blog.css')}}">
        <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/owl.css')}}">

        {{ $styles ?? '' }}
    </head>
    <body>
        @include('guest.partials.preloader')
        @include('guest.partials.header')

        {{ $slot }}

        @include('guest.partials.footer')

        <script src="{{asset('assets/frontend/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/frontend/assets/js/custom.js')}}"></script>
        <script src="{{asset('assets/frontend/assets/js/owl.js')}}"></script>
        <script src="{{asset('assets/frontend/assets/js/slick.js')}}"></script>
        <script src="{{asset('assets/frontend/assets/js/isotope.js')}}"></script>
        <script src="{{asset('assets/frontend/assets/js/accordions.js')}}"></script>

        {{ $scripts ?? ''}}
    </body>
</html>
