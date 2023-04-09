<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'BlogBloom') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <link href="{{asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/fontawesome.css')}}">
        <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/templatemo-stand-blog.css')}}">
        <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/owl.css')}}">
        <style>
            .blog-posts .down-content p {
                padding: unset !important;
                margin: 25px 0px !important;
                border-top: unset !important;
                border-bottom: unset !important;
            }

            .post-content {
                display: -webkit-box;
                -webkit-line-clamp: 5;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }
        </style>

        {{ $styles ?? '' }}

     <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6935747493789766"
     crossorigin="anonymous"></script>
    </head>
    <body onmousedown="return false" onselectstart="return false" >
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
