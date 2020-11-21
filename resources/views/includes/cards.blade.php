<div class="px-3 mb-6">
    <div class="flex justify-between items-center text-gray-700 text-lg font-bold py-4">
        <div class="">{{ __('Rapport General') }}</div>
        <div class="">
            <button class="bg-white rounded-lg py-2 px-3 text-gray-600 text-sm hover:bg-orange-100 border-white shadow focus:outline-none">
                <i class="fas fa-sync-alt"></i>
                <span class="ml-2"> {{ __('Recharger') }}</span>
            </button>
        </div>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <?php
            $icons = [
                ['<i class="fas fa-hand-holding-usd"></i>', '<i class="fas fa-chevron-up"></i>', "24.254 MAD" , 'Recettes'],
                ['<i class="fas fa-file-contract"></i>', '<i class="fas fa-chevron-up"></i>', "17" , 'Locations'],
                ['<i class="fas fa-cash-register"></i>', '<i class="fas fa-chevron-down"></i>', "1.254 MAD" , 'Depenses'],
                ['<i class="far fa-address-card"></i>', '<i class="fas fa-chevron-up"></i>', "3450" , 'Clients']
            ]
        ?>
        @for ($i = 0; $i < 4; $i++)
            <div 
                class="bg-white rounded-xl shadow py-4 px-4 cursor-pointer hover:shadow-lg 
                       transition duration-500 ease-in-out
                        transform hover:-translate-y-2 hover:scale-100
                        ">
                <div class="flex justify-between items-center mb-4">
                    <div class="text-orange-400 text-xl"><?= $icons[$i][0] ?></div>
                    <div class="bg-green-400 text-white py-1 px-2 rounded-full text-xs" style="font-size: 10px">
                        12% <?= $icons[$i][1] ?>
                    </div>
                </div>
                <h1 class="font-bold text-xl text-gray-600">
                    <?= $icons[$i][2] ?>
                </h1>
                <p class="text-sm text-gray-400">
                    <?= $icons[$i][3] ?>
                </p>
            </div>               
        @endfor

    </div>
</div>