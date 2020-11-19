<div class="px-3 mb-4">
    <div class="flex justify-between items-center text-gray-700 text-lg font-bold py-4">
        <div class="">{{ __('Calendrier') }}</div>
        <div class="">
            <button class="bg-white rounded-lg py-2 px-3 text-gray-600 text-sm hover:bg-orange-100 border-white shadow focus:outline-none">
                <i class="far fa-calendar-alt"></i>
                <span class="ml-2"> 01 Nov, 2020 - 30 Nov, 2020 </span>
            </button>
        </div>
    </div>
    <div class="">
        <table class="w-full" style="min-width: 620px">
            <thead>
                <tr>
                    <th class=""></th>
                    @for ($i = 1; $i <= Carbon\Carbon::now()->daysInMonth; $i++)
                        <th class="w-4 min-w-6">
                            <div 
                                class="-mb-2 lg:rounded-tl-lg lg:rounded-tr-lg border-t border-r border-l text-xs py-1 text-white text-xs font-light" 
                                style="background-color:#658999"
                            >
                                {{ $i }} 
                            </div>
                            
                        </th>
                    @endfor
                    
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 12; $i++)
                    <tr>
                        <td class="w-32">
                            <div class="-mb-1 flex items-center pl-2 h-12 my-1 border-t border-l border-b bg-white rounded-tl-lg rounded-bl-lg hover:shadow">
                                <img 
                                    class="object-cover w-8 h-8 rounded-full cursor-pointer" 
                                    src="http://midone-vue.left4code.com/img/profile-7.e6fd9c30.jpg"
                                > 
                                <div class="text-bold text-sm ml-1">
                                    Car ({{$i}})
                                </div>
                            </div>    
                        </td>
                        @for ($j = 1; $j <= Carbon\Carbon::now()->daysInMonth; $j++)
                            <td class=""> 
                                @if ($i === 2 && $j > 12)
                                    <div class="-mb-2 flex items-center h-12 bg-white border-t border-b">
                                        <div class="bg-orange-500 rounded py-1 px-1 h-3 w-full"></div>
                                    </div>
                                @else
                                    <div class="-mb-2 flex items-center h-12 bg-white border-t border-b"></div>
                                @endif
                            </td>
                        @endfor
                    </tr>
                @endfor
            </tbody>
        </table>

    </div>
</div>