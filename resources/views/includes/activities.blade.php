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
        @foreach ($activities as $activity)

            <div 
                class="flex items-center mb-3">
                <div class="w-10 test">
                    <img 
                        class="object-cover w-8 h-8 rounded-full cursor-pointer" 
                        src="{{ $activity['profile_photo_path'] }}"
                    > 
                </div>
                <div class="bg-white flex-1 px-4 py-2 rounded-lg shadow relative
                bg-white  cursor-pointer hover:shadow-lg 
                       transition duration-500 ease-in-out
                        transform hover:-translate-y-2 hover:scale-100
                ">
                    <div class="flex justify-between items-center mb-1">
                        <div class="font-bold text-xs">
                            {{ $activity['name'] }}
                        </div>
                        <div class="text-xs text-orange-400" style="font-size:10px">
                            {{ $activity['created_at'] }} PM
                        </div>
                    </div>
                    <div class="font-light text-gray-400 text-xs break-words">
                        <p>{{ $activity['activity'] }}</p>
                    </div>

                </div>
            </div>
        @endforeach
        <div class="my-4 text-gray-600 text-center text-xs font-bold">
            20 November
        </div>
    </div>
</div>