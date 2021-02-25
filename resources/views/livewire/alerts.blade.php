<div class="mx-4 relative text-lg text-gray-500 cursor-pointer dropdown">
    <i class="far fa-bell"></i>
    @if (count($alerts))
       <span class="w-2 h-2 bg-red-600 absolute rounded-full"></span> 
    @endif
    
    <div class="dropdown-content hidden absolute cursor-default z-50 top-0 right-0 p-4 mt-8 bg-white rounded-lg shadow @if (count($alerts)) w-80 @else w-48 @endif max-h-80 overflow-y-auto">
        <div class="pb-2 text-sm font-bold text-gray-600">
            Alerts
        </div>
        <div class="-mx-4 border-t border-gray-200 pb-4"></div>
        @forelse ($alerts as $alert)
            <div class="flex items-center mb-3 cursor-pointer">
                <div class="bg-white flex-1">
                    <div class="flex justify-between items-center mb-1">
                        <div class="font-bold text-xs">
                            {{ $alert['subject'] }}
                        </div>
                        <div class="text-xs text-orange-400" style="font-size:10px">
                            {{ \Carbon\Carbon::createFromTimeStamp(strtotime($alert['created_at']))->diffForHumans() }}
                        </div>
                    </div>
                    <div class="font-light text-gray-400 text-xs break-words hover:underline">
                        <p>{{ $alert['description'] }}</p>
                    </div>
                </div>
            </div>                    
        @empty
            <div class="text-center text-xs mb-4 text-orange-400">
                <div class="text-3xl mb-2">
                    <i class="far fa-smile-wink"></i>
                </div>
                <div class="">
                    Aucune Notification!
                </div>
                
            </div>
        @endforelse 
    </div>
</div>
