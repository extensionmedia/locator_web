<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href=" {{ asset('css/app.css') }}">
   
</head>
<body>
    <div class="w-full h-full max-h-full bg-gray-800 flex">
        <!-- Vertical Nav -->
        @include('layouts.includes.vertical_nav')

        <!-- Content -->
        <div class="flex-1 bg-gray-100 my-4 mr-4 px-6 overflow-x-auto" style="border-radius: 30px">
            @include('layouts.includes.topbar')
            <div class="overflow-y-auto">
                @yield('content')
            </div>
        </div>        
    </div>

    
</body>
</html>