<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <link rel="stylesheet" href=" {{ asset('css/app.css') }}">
    <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @livewireStyles
</head>
<body>
    <div class="h-full max-h-full bg-gray-800 flex overflow-hidden">
        <!-- Vertical Nav -->
        @include('layouts.includes.vertical_nav')

        <!-- Content -->
        <div class="flex flex-col h-full w-full bg-gray-100 my-4 mr-4 px-6 pb-6" style="border-top-left-radius: 30px; border-top-right-radius: 30px">
            <div class="">
                @include('layouts.includes.topbar')
            </div>
           
            <div class="flex-1 overflow-y-auto pb-2">
                @yield('content')
            </div>
        </div>  

    </div>

    @include('popper::assets')
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireScripts
    
</body>
</html>