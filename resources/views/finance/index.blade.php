@extends('layouts.locator')

@section('title') {{__('Finance')}} @endsection
@section('page_title') {{ __('Liste des comptes') }} @endsection
@section('content')
    <div class="lg:flex mt-4">
        @foreach ($accounts as $account)
            <div class="card bg-white flex-1 relative @if ($account->finance_account_is_default) border border-green-300 @endif">
                @if ($account->finance_account_is_default)
                    <div class="absolute top-0 right-0 m-1 bg-green-400 rounded text-white text-xs py-1 px-2">
                        Par Defaut 
                    </div>
                @endif
                <div class="relative text-center text-4xl font-light">
                    @money($account->mouvements->sum('account_mouvement_in')) 
                    <span class="text-orange-400 text-sm font-light">
                        MAD
                    </span>
                </div>
                <div class="relative text-center text-md text-gray-400 tracking-wide mb-4">
                    {{ $account->finance_account_name }}
                </div>
                <div class="pb-6">
                @foreach ($account->mouvements->sortByDesc('account_mouvement_date')->take(5) as $mouvement)
                    <div class="border-l relative hover:bg-gray-100 hover:rounded flex item-center p-2 text-xs">
                        <div class="font-light text-gray-400">{{ $mouvement->account_mouvement_date }}</div>
                        <div class="flex-1 px-3">
                            {{ Str::words($mouvement->description, 3, ' ...') }}
                        </div>
                        @if ($mouvement->account_mouvement_in > 0)
                            <div class="text-green-500">+ @money($mouvement->account_mouvement_in)</div>
                        @else
                            <div class="text-red-500">- @money($mouvement->account_mouvement_out)</div>
                        @endif
                        
                        <div class="absolute left-0 mt-2 -ml-0.5 bg-gray-500 rounded-full h-1 w-1"></div>
                    </div>
                @endforeach                
                </div>

                <a href="" class="z-20 absolute bottom-0 left-0 right-0 pb-2 text-center bg-white">
                    <button class="btn txt-sm px-4 rounded-md">Consulter</button>
                </a>
            </div>
        @endforeach
    </div>

    <div class="flex">
        <div class="card flex-1">
            <h1 class="text-xl">Recettes par compte </h1>
            <canvas id="myPieChart" width="100%"></canvas>     
        </div>   
        
        <div class="card flex-1">
            <h1 class="text-xl">Mouvements par mois </h1>
            <canvas id="myBarChart" width="100%"></canvas>   
        </div>

    </div>


@endsection