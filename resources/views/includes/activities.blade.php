<div class="px-3 mb-4">
    <div class="flex justify-between items-center text-gray-700 text-lg font-bold py-4">
        <div class="">{{ __('Activités') }}</div>
        <div class="">
            <button class="bg-white rounded-lg py-2 px-3 text-gray-600 text-sm hover:bg-orange-100 border-white shadow focus:outline-none">
                <i class="fas fa-ellipsis-h"></i>
                <span class="ml-2"> {{ __('Voir tous') }}</span>
            </button>
        </div>
    </div>
    <style>

        .test::after {
            display: inline-block;
            content: "";
            border-top: 1px solid #3b3838;
            width: 10px;
            margin: 0 0 0 10px;
            transform: translateY(-1rem);
            z-index: 0
        }
    </style>
    <div class="">
        @foreach ($cars as $car)
            <div class="flex items-center mb-3">
                <div class="w-10 test">
                    <img 
                        class="object-cover w-8 h-8 rounded-full cursor-pointer" 
                        src="{{ $car[0] }}"
                    > 
                </div>
                <div class="bg-white flex-1 p-4 rounded-lg shadow relative">
                    <div class="font-bold text-xs">Yassine EL.</div>
                    <div class="font-light text-gray-400 text-xs">
                        A Créer un contrat de location numéro <a href="">#4578556</a> 
                    </div>
                    <div class="absolute top-0 right-0 text-xs text-orange-400 p-4" style="font-size:10px">
                        07:00 PM
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>