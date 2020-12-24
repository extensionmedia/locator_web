@extends('layouts.locator')
@section('title') {{ __('Liste Locations') }} @endsection
@section('page_title') {{ __('Liste Locations') }} @endsection
@section('content')
    <div class="py-4 flex items-center justify-between">
        <div class="flex gap-3">
            <div class="relative">
            <input type="text" class="border rounded focus:outline-none focus:bg-yellow-50 px-3 py-2 pr-6"> 
            <span class="absolute top-0 right-0 m-2 mt-3 text-gray-400"><i class="fas fa-search"></i></span>
            </div>
            

            <div class="py-2 px-3 rounded-lg border cursor-pointer hover:border-gray-500 bg-white ">
                <span class="text-gray-400 text-xs">Trier par:</span> 
                <select name="" id="" class="bg-transparent">
                    <option value="ville">Ville</option>
                    <option value="marque">Homme / Femme</option>
                    <option value="nom">Nom</option>
                    <option value="ca">C.A.</option>
                    <option value="status">Status</option>
                </select>
            </div>

            <div class="py-2 px-3 rounded-lg border cursor-pointer hover:border-gray-500 bg-white ">
                <span class="text-gray-400 text-xs">Filtrer</span> 
                <span class="px-2"> <i class="fas fa-sliders-h"></i> </span>
            </div>

            <div class="flex gap-2">
                <button class="btn" wire:click="change"><i class="far fa-list-alt"></i></button>
                <button class="btn btn-primary" wire:click="change"><i class="fas fa-th"></i></button>
            </div>
        </div>

        <div class="">
            <button class="btn btn-primary"> <i class="fas fa-plus"></i> Ajouter
        </div>

    </div>
    <div class="py-2">{{ $rents->total() }}</div>
    <div class="shadow">
        <table class="w-full bg-white text-xs">
            <thead>
                <tr class="bg-gray-200 py-2 text-xs font-normal uppercase">
                    <th class="py-3 w-24">Vehicule</th>
                    <th class="py-3 text-left">Client</th>
                    <th class="py-3 text-left">Debut</th>
                    <th class="py-3 text-center">Fin</th>
                    <th class="py-3 text-center">Jrs</th>
                    <th class="py-3">Status</th>
                    <th class="py-3 text-right pr-2">Total</th>
                    <th class="py-3 text-right pr-2">Reste</th>
                    <th class="py-3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rents as $rent)
                    <tr class="border-b hover:bg-gray-100" style="transition: all .3s">
                        <td class="py-2" style="min-width: 60px">
                            {{ Str::upper($rent->car->car_matricule) }}
                        </td>
                        <td class="py-1">
                            <div class="">
                                {{ $rent->client->client_name }} 
                            </div>
                            <div class="py-1 text-black">
                                <i class="fas fa-phone-square-alt"></i> {{ $rent->client->client_telephone }} 
                            </div>
                        </td>
                        <td class="w-28">
                            {{ $rent->car_rent_start_date }} 
                        </td>
                        <td class="w-28 text-center">
                            {{ $rent->car_rent_end_date }} 
                        </td>
                        <td class="w-28 text-center text-2xl">
                            {{ $rent->car_rent_days }} 
                        </td>
                        <td class="w-28 text-center">
                            {!! str_replace('[]', $rent->car_rent_status->car_rent_status, $rent->car_rent_status->car_rent_status_icon) !!}  
                        </td>
                        <td class="w-24 text-right text-xs font-bold text-orange-400 pr-2"> {{ number_format($rent->paiements->sum('account_mouvement_in'), 2) }} </td>
                        <td class="w-24 text-right text-xs font-bold text-pink-600 pr-2 ">{{ number_format($rent->depenses->sum('account_mouvement_out'), 2) }} </td>
                        <td class="w-14 text-center">
                            <form class="m-0" method="POST" action="{{ route('rent.edit', ['rent'=>$rent->id]) }}">
                                @csrf()
                                <button type="submit" class="btn"><i class="fas fa-ellipsis-h"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <div class="py-3 text-center max-w-full overflow-auto">
        <ul class="items-center">
            @if($rents->onFirstPage())
                <li class="inline-block rounded border bg-gray-100"><i class="fas fa-angle-left"></i></li>
            @else
                <li class="inline-block">
                    <a class="inline-block rounded border bg-gray-200 hover:bg-gray-200" href="{{ $rents->previousPageUrl() }}"><i class="fas fa-angle-left"></i></a>
                </li>
            @endif
            @foreach ($rents->getUrlRange(1,$rents->lastPage()) as $page=>$url)
                @if ( $page == $rents->currentPage() )
                    <li class="inline-block rounded border bg-orange-400">{{$page}}</li>
                @else
                    <li class="inline-block">
                        <a class="inline-block rounded border bg-gray-100 hover:bg-gray-200" href="{{ $url }}">{{$page}}</a>
                    </li>                
                @endif
            @endforeach

            
            
            @if($rents->hasMorePages())
                
                <li class="inline-block">
                    <a class="inline-block rounded border bg-gray-100 hover:bg-gray-200" href="{{ $rents->nextPageUrl() }}"><i class="fas fa-angle-right"></i></a>
                </li>
            @else
                <li class="inline-block rounded border bg-gray-500"><i class="fas fa-angle-right"></i></li>
            @endif

        </ul>
    </div>
@endsection