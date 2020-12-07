<?php
$links = [
    ['<i class="fas fa-home"></i>', 'Dashboard', route("home")],
    ['<i class="fas fa-hourglass-half"></i>', 'Locations', route("home")],
    ['<i class="far fa-address-card"></i>', 'Clients', route("client.index")],
    ['<i class="fas fa-car-alt"></i>', 'Park Auto', route("car.index")],
    ['<i class="fas fa-cash-register"></i>', 'Depenses', route("home")],
    ['<i class="fas fa-user-friends"></i>', 'Utilisateurs', route("home")]
]
?>
<div class="flex flex-col justify-between px-6 pt-4 pb-4 h-full overflow-y-auto w-20 lg:w-48">
    <div class="">
        <div class="flex items-center h-16 border-b border-gray-600">
            <img class="h-8 mr-2" src="{{ asset('images/locator-icon-96x96.png') }}" {{ Popper::arrow()->size('small')->position('left')->pop(config('app.name')) }}>
            <div class="font-bold text-white text-lg hidden lg:block">
                {{ config('app.name') }}
            </div>
            <div class="text-xs text-gray-400 ml-2 -mt-2 hidden lg:block">beta</div>
        </div>
        <ul class="text-gray-200 mt-2">
            @foreach ($links as $l)
                <li>
                    <a {{ Popper::arrow()->size('small')->position('left')->pop($l[1]) }} href="<?= $l[2] ?>" class="flex items-center hover:bg-gray-600 cursor-pointer py-2 px-2 -mx-2 rounded-md mb-4 lg:mb-1">                    
                        <div class="text-center w-full text-xl lg:text-base lg:w-6 lg:text-left"><?= $l[0] ?></div>
                        <div class="flex-1 text-sm hidden lg:block"><?= $l[1] ?></div>
                    </a>
                </li>            
            @endforeach
    
        </ul>
    </div>
    <div class="">
        <ul class="text-gray-200 mt-2">
            <li>
                <a {{ Popper::arrow()->size('small')->position('left')->pop( __('Paramêtres') ) }} href="" class="flex items-center hover:bg-gray-600 cursor-pointer py-2 px-2 -mx-2 rounded-md mb-4 lg:mb-1">
                    <div class="text-center w-full text-xl lg:text-base lg:w-6 lg:text-left"><i class="fas fa-cogs"></i></div>
                    <div class="flex-1 text-sm hidden lg:block">{{ __('Paramêtres') }}</div>
                </a>
            </li>
            <li>
                <a {{ Popper::arrow()->size('small')->position('left')->pop( __('Support') ) }} href="" class="flex items-center hover:bg-gray-600 cursor-pointer py-2 px-2 -mx-2 rounded-md mb-4 lg:mb-1">
                    <div class="text-center w-full text-xl lg:text-base lg:w-6 lg:text-left"><i class="far fa-question-circle"></i></div>
                    <div class="flex-1 text-sm hidden lg:block">{{ __('Support') }} </div>
                </a>
            </li>
        </ul>
    </div>


</div>