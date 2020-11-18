<div class="px-3">
    <div class="flex justify-between items-center text-gray-700 text-lg font-bold py-4">
        <div class="">{{ __('Calendrier') }}</div>
        <div class="text-xs cursor">
            <i class="fas fa-sync-alt"></i>
            {{ __('Recharger') }}
        </div>
    </div>
    <div class="bg-white">
        <table class="w-full">
            <thead>
                <tr>
                    <th class=""></th>
                    @for ($i = 1; $i <= Carbon\Carbon::now()->daysInMonth; $i++)
                        <th class="border text-xs bg-gray-300 text-gray-700" style="min-width: 15px"> {{ $i }} </th>
                    @endfor
                    
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 12; $i++)
                    <tr>
                        <td class="py-4 border-b">
                            <div class="flex items-center">
                                <img 
                                    class="object-cover w-8 h-8 rounded-full cursor-pointer" 
                                    src="http://midone-vue.left4code.com/img/profile-7.e6fd9c30.jpg"
                                > 
                                <div class="text-bold text-sm">
                                    Car ({{$i}})
                                </div>
                            </div>    
                        </td>
                        @for ($j = 1; $j <= Carbon\Carbon::now()->daysInMonth; $j++)
                            <td class="border py-4 " style="min-width: 15px"> 
                                @if ($i === 2 && $j > 12)
                                    <div class="bg-orange-500 rounded py-1 px-1 h-3"></div>
                                @else
                                    
                                @endif
                            </td>
                        @endfor
                    </tr>
                @endfor
            </tbody>
        </table>

    </div>
</div>