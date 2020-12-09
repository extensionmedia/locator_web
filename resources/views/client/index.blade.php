@extends('layouts.locator')
@section('title') {{ __('Clients') }} @endsection
@section('page_title') {{ __('Clients') }}   @endsection
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

    <div class="shadow">
        <table class="w-full bg-white text-xs">
            <thead>
                <tr class="bg-gray-200 py-2 text-xs font-normal uppercase">
                    <th class="py-3 w-20">Img</th>
                    <th class="py-3 text-left">Client</th>
                    <th class="py-3 text-left">Téléphone</th>
                    <th class="py-3 text-center">Ville</th>
                    <th class="py-3">Status</th>
                    <th class="py-3 text-right pr-2">Locations</th>
                    <th class="py-3 text-right pr-2">Crédit</th>
                    <th class="py-3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr class="border-b hover:bg-gray-100" style="transition: all .3s">
                        <td class="py-1" style="min-width: 60px">
                            <img class="object-cover w-10 h-10 rounded-full mx-auto" src="{{ $client->client_photo_profile }}">
                        </td>
                        <td>
                            {{ $client->client_name }} 
                        </td>
                        <td class="w-28">
                                {{ $client->client_telephone }} 
                        </td>
                        <td class="w-28 text-center">
                            {{ $client->client_city }}
                        </td>
                        <td class="w-28 text-center">
                            {!! $client['status'] !!}
                        </td>
                        <td class="w-24 text-right text-xs font-bold text-orange-400 pr-2"> {{ number_format($client->rents()->sum('car_rent_total'), 2) }} </td>
                        <td class="w-24 text-right text-xs font-bold text-pink-600 pr-2 ">{{ number_format($client->client_total_rent-$client->client_total_accompte, 2) }} </td>
                        <td class="w-14 text-center">
                            <form class="m-0" method="POST" action="{{ route('client.edit', ['client'=>1]) }}">
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
            @if($clients->onFirstPage())
                <li class="inline-block rounded border bg-gray-100"><i class="fas fa-angle-left"></i></li>
            @else
                <li class="inline-block">
                    <a class="inline-block rounded border bg-gray-200 hover:bg-gray-200" href="{{ $clients->previousPageUrl() }}"><i class="fas fa-angle-left"></i></a>
                </li>
            @endif
            @foreach ($clients->getUrlRange(1,$clients->lastPage()) as $page=>$url)
                @if ( $page == $clients->currentPage() )
                    <li class="inline-block rounded border bg-gray-100">{{$page}}</li>
                @else
                    <li class="inline-block">
                        <a class="inline-block rounded border bg-gray-100 hover:bg-gray-200" href="{{ $url }}">{{$page}}</a>
                    </li>                
                @endif
            @endforeach

            
            
            @if($clients->hasMorePages())
                
                <li class="inline-block">
                    <a class="inline-block rounded border bg-gray-100 hover:bg-gray-200" href="{{ $clients->nextPageUrl() }}"><i class="fas fa-angle-right"></i></a>
                </li>
            @else
                <li class="inline-block rounded border bg-gray-500"><i class="fas fa-angle-right"></i></li>
            @endif

        </ul>
    </div>
@endsection