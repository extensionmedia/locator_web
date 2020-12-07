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

    <div class="rounded-lg border-t-2 border-b-2 border-pink-200 bg-red-500 overflow-hidden">
        <table class="w-full bg-white">
            <thead>
                <tr class="bg-gray-200 py-2 text-xs font-normal uppercase">
                    <th class="py-3 w-16">Img</th>
                    <th class="py-3 ">Matricule</th>
                    <th class="py-3 text-left">Marque</th>
                    <th class="py-3 text-center">Carburant</th>
                    <th class="py-3">Status</th>
                    <th class="py-3 text-right pr-2">Locations</th>
                    <th class="py-3 text-right pr-2">Dépenses</th>
                    <th class="py-3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr class="border-b hover:bg-gray-100" style="transition: all .3s">
                        <td class="py-1" style="min-width: 60px">
                            <img class="object-cover w-12 h-12 rounded-full mx-auto" src="{{ $client['photo'] }}">
                        </td>
                        <td class="w-28">
                            {{ $client['name'] }} 
                        </td>
                        <td class="">
                                {{ $client['telephone'] }} 
                        </td>
                        <td class="w-28 text-center">
                            {{ $client['city'] }}
                        </td>
                        <td class="w-28 text-center">
                            @if ($client['status'] == 1)
                                <div class="inline py-1 px-2 text-xs bg-green-200 text-green-700 border-green-400 text-center rounded-xl border">
                                    Disponible
                                </div>   
                            @elseif ($client['status'] == 0)
                                <div class="inline py-1 px-2 text-xs bg-red-200 text-red-700 border-red-400 text-center rounded-xl border">
                                    Location
                                </div>                 
                            @else
                                <div class="inline py-1 px-2 text-xs bg-gray-200 text-gray-700 border-gray-400 text-center rounded-xl border">
                                    En Panne
                                </div> 
                            @endif
                        </td>
                        <td class="w-24 text-right text-xs font-bold text-orange-400 pr-2">5.124.450 MAD</td>
                        <td class="w-24 text-right text-xs font-bold text-pink-600 pr-2 ">45.900 MAD</td>
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

@endsection