<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <link href="{{asset('assets/backend/css/font-face.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('assets/backend/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('assets/backend/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('assets/backend/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('assets/backend/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('assets/backend/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('assets/backend/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('assets/backend/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('assets/backend/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('assets/backend/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('assets/backend/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('assets/backend/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('assets/backend/css/theme.css')}}" rel="stylesheet" media="all">

        <style>
            .post-content {
                display: -webkit-box;
                -webkit-line-clamp: 1;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }
        </style>

        {{ $styles ?? '' }}
    </head>
    <body class="animsition">
        <div class="page-wrapper">
            @include('admin.partials.mobile-header')
            @include('admin.partials.sidebar')

            <div class="page-container">
                @include('admin.partials.desktop-header')
                {{ $slot }}
            </div>
        </div>

        <script src="{{asset('assets/backend/vendor/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('assets/backend/vendor/bootstrap-4.1/popper.min.js')}}"></script>
        <script src="{{asset('assets/backend/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/backend/vendor/slick/slick.min.js')}}"></script>
        <script src="{{asset('assets/backend/vendor/wow/wow.min.js')}}"></script>
        <script src="{{asset('assets/backend/vendor/animsition/animsition.min.js')}}"></script>
        <script src="{{asset('assets/backend/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
        <script src="{{asset('assets/backend/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/backend/vendor/counter-up/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('assets/backend/vendor/circle-progress/circle-progress.min.js')}}"></script>
        <script src="{{asset('assets/backend/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
        <script src="{{asset('assets/backend/vendor/chartjs/Chart.bundle.min.js')}}"></script>
        <script src="{{asset('assets/backend/vendor/select2/select2.min.js')}}"></script>
        <script src="{{asset('assets/backend/js/main.js')}}"></script>

        {{ $scripts ?? ''}}
    </body>
</html>
