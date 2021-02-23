@extends('layouts.locator')

@section('title') {{__('Finance')}} @endsection
@section('page_title') {{ __('Liste des comptes') }} @endsection
@section('content')
    <div class="flex mt-4">
        @foreach ($accounts as $account)
            <a href="" class="card flex-1 relative @if ($account->finance_account_is_default) border border-green-300 @endif">
                @if ($account->finance_account_is_default)
                    <div class="absolute top-0 right-0 m-1 bg-green-400 rounded text-white text-xs py-1 px-2">
                        Par Defaut 
                    </div>
                @endif
                <div class="relative text-center text-3xl font-bold">
                    @money($account->mouvements->sum('account_mouvement_in')) 
                    <span class="text-orange-400 text-sm font-light">
                        MAD
                    </span>
                </div>
                <div class="relative text-center text-xl">
                    {{ $account->finance_account_name }}
                </div>

                @foreach ($account->mouvements->sortByDesc('account_mouvement_date')->take(5) as $mouvement)
                    <div class="flex item-center border-l border-l-2 py-1 px-2 text-xs mt-4">
                        <div class="font-light text-gray-400">{{ $mouvement->account_mouvement_date }}</div>
                        <div class="flex-1 px-3">{{ $mouvement->description }}</div>
                        <div class="font-bold">@money($mouvement->account_mouvement_in) MAD</div>
                    </div>
                @endforeach
            </a>
        @endforeach
    </div>
@endsection