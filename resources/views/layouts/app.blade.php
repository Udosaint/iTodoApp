{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>iTodo</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="icon" href="img/favicon-02.png">

        <link  href="font/css/all.min.css">
        <script src="font/js/all.min.js"></script>
        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="flex">

            <x-sidebar></x-sidebar>

            <!-- Main Content -->
            <div class=" flex-grow w-full px-2 py-8 md:px-10">

                {{$slot}}

            </div>
        </div>

    </body>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/main.js"></script>
</html>

    <script>


        $(document).ready(function(){
            //$('#collaps-icon').addClass('fa-chevron-up');
        });


        $('#collapsible-link').click(function(){

            $('#collapsible-content').toggleClass('hidden');
            $('#collaps-icon').toggleClass('rotate-180');

        });


        $('#sidebar-toggle').click(function(){
            $('#sidebar').toggleClass('hidden');
        });
            

  </script> --}}


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
   Dashboard | iTodo
  </title>

    <link rel="icon" href="img/favicon-02.png">

    <link  href="font/css/all.min.css">
    <script src="font/js/all.min.js"></script>
     {{-- <script src="js/index.js"></script> --}}

     {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"> --}}

     <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.3/dist/cdn.min.js"></script>
   @vite(['resources/css/app.css', 'resources/js/app.js'])

   @livewireStyles
</head>

    <body
        x-data="{'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
        x-init="
            darkMode = JSON.parse(localStorage.getItem('darkMode'));
            $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
        :class="{'dark text-bodydark bg-boxdark-2': darkMode === true}">


        <div class="flex h-screen overflow-hidden">


            <x-sidebar/>


            <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
                
                <x-app-header></x-app-header>                
                
                {{$slot}}
            
            
            </div>


            
        </div>


        <script src="js/jquery-3.4.1.min.js"></script>

        @livewireScripts
       
  </body>

</html>
