<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>JYA Real Estate Services</title>
        <!-- Favicon -->
        <link href="{{ asset('img/logo.png') }}" rel="icon" type="image/png">
        <!-- Fonts -->
        

        <!-- Icons -->
        <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
        <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('argon') }}/css/argon.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('select2') }}/select2.min.css">
        

        @livewireStyles
        @powerGridStyles
        <link rel="stylesheet" href="{{ asset('sweetalert2/dist/sweetalert2.min.css') }}">
    </head>
    <body class="{{ $class ?? '' }}">
        
        
        @auth()
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @include('layouts.navbars.sidebar')
        @endauth
           
        <div class="main-content">
            {{session('status')}}
            @include('layouts.headers.cards')
            @include('layouts.navbars.navbar')
            @yield('content')
            
            
            
        </div>


        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <!-- Argon JS -->
        <script defer src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
        
        <script defer src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
        <script defer src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        
        <script defer src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets') }}/vendor/jquery/dist/jquery.min.js"></script>
        @stack('scripts')
        @stack('js')
        
        <script src="{{ asset('sweetalert2') }}/dist/sweetalert2.min.js"></script>
        
        @include('sweetalert::alert')
        @livewireScripts
        @powerGridScripts
        @livewireChartsScripts
        

        <script>
           var i = 0;
           /* Room field */
            $("#addRoomField").click(function () {
                ++i;
                $("#roomInputForm").append('<tr><td><input type="file" class="form-control" name="room['+i+'][image]"></td><td><input type="text" name="room[' + i +
                    '][description]" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
                    );
            });
            $(document).on('click', '.remove-input-field', function () {
                $(this).parents('tr').remove();
            });
            /* Area Field */
            $("#addAreaField").click(function () {
                ++i;
                $("#areaInputForm").append('<tr><td><input type="file" class="form-control" name="area['+i+'][image]"></td><td><input type="text" name="area[' + i +
                    '][description]" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
                    );
            });
            $(document).on('click', '.remove-input-field', function () {
                $(this).parents('tr').remove();
            });
            /* Amenities Field */
            $("#addAmenitiesField").click(function () {
                ++i;
                $("#amenitiesInputForm").append('<tr><td><input type="file" class="form-control" name="amenities['+i+'][image]"></td><td><input type="text" name="amenities[' + i +
                    '][description]" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
                    );
            });
            $(document).on('click', '.remove-input-field', function () {
                $(this).parents('tr').remove();
            });

        </script>

    </body>
</html> 