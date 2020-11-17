<?php
$links = [
    ['<i class="fas fa-home"></i>', 'Dashboard'],
    ['<i class="fas fa-hourglass-half"></i>', 'Locations'],
    ['<i class="far fa-address-card"></i>', 'Clients'],
    ['<i class="fas fa-car-alt"></i>', 'Park Auto'],
    ['<i class="fas fa-cash-register"></i>', 'Depenses'],
    ['<i class="fas fa-user-friends"></i>', 'Utilisateurs']
]
?>
<div class="flex flex-col justify-between px-6 pt-4 h-full overflow-y-auto" style="width: 180px">
    <div class="">
        <div class="flex items-center h-14 border-b border-gray-600">
            <img class="h-8 mr-2" src="{{ asset('images/locator-icon-96x96.png') }}">
            <div class="font-bold text-white text-lg">
                {{ config('app.name') }}
            </div>
            <div class="text-xs text-gray-400 ml-2 -mt-2">beta</div>
        </div>
        <ul class="text-gray-200 mt-2">
            @foreach ($links as $l)
                <li>
                    <a href="" class="flex items-center hover:bg-gray-600 cursor-pointer py-2 px-2 -mx-2 rounded-md mb-1">                    
                        <div class="w-6"><?= $l[0] ?></div>
                        <div class="flex-1 text-sm"><?= $l[1] ?></div>
                    </a>
                </li>            
            @endforeach
    
        </ul>
    </div>
    <div class="">
        <ul class="text-gray-200 mt-2">
            <li class="flex items-center hover:bg-gray-600 cursor-pointer py-2 px-2 -mx-2 rounded-md mb-1">
                <div class="w-6"><i class="fas fa-cogs"></i></div>
                <div class="flex-1 text-sm">Paramêtres</div>
            </li>
            <li class="flex items-center hover:bg-gray-600 cursor-pointer py-2 px-2 -mx-2 rounded-md mb-1">
                <div class="w-6"><i class="far fa-question-circle"></i></div>
                <div class="flex-1 text-sm">Support</div>
            </li>
        </ul>
    </div>


</div>