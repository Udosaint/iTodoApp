<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- <title>{{env('SITE')}}</title> --}}

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="icon" href="{{asset('img/favicon-02.png')}}">

        <link  href="{{asset('font/css/all.min.css')}}">
        <script src="{{asset('font/js/all.min.js')}}"></script>
        <!-- Styles -->
       <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.3/dist/cdn.min.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>


    <body>
        
        

        {{$slot}}

        <!-- ========== End Section ========== -->
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>

    @livewireScripts
    </body>
</html>
