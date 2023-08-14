<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{env('SITE')}}</title>

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

        
        {{-- Alert --}}

            <div id="alerts" style="display: none"  class="absolute items-center translate-x-0  duration-300 ease-linear  right-6 flex w-70 md:w-96 mt-8.5 border-l-6 border-[#1d1e1e]
            bg-[#34D399]  dark:bg-[#1B1B24] px-2 py-2 shadow-md 
            dark:bg-opacity-30 md:p-3">
                <div class="mr-5 flex h-9 w-full max-w-[36px] items-center justify-center rounded-lg bg-[#34D399]">
                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                    d="M15.2984 0.826822L15.2868 0.811827L15.2741 0.797751C14.9173 0.401867 14.3238 0.400754 13.9657 0.794406L5.91888 9.45376L2.05667 5.2868C1.69856 4.89287 1.10487 4.89389 0.747996 5.28987C0.417335 5.65675 0.417335 6.22337 0.747996 6.59026L0.747959 6.59029L0.752701 6.59541L4.86742 11.0348C5.14445 11.3405 5.52858 11.5 5.89581 11.5C6.29242 11.5 6.65178 11.3355 6.92401 11.035L15.2162 2.11161C15.5833 1.74452 15.576 1.18615 15.2984 0.826822Z"
                    fill="white" stroke="white"></path>
                </svg>
                </div>
                <div class="w-full flex  items-center  ">
                    <h5 class=" text-md md:text-lg font-bold text-black dark:text-[#34D399]">
                        Message Sent Successfully
                    </h5>
                </div>
            </div>
        {{-- Alert End --}}

        


        {{$slot}}




        <!-- ========== End Section ========== -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/main.js"></script>

    @livewireScripts
    </body>
</html>
<script>
    $(document).ready(function(){

        $('#alerts').hide();
        setInterval(() => {
          $('#alerts').show().addClass('translate-x-0');  
        }, 800);

        setInterval(() => {
          $('#alerts').show().addClass('translate-x-180');  
        }, 3000);

    });
</script>