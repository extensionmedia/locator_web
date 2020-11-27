@extends('layouts.locator')

@section('title') {{ __('Park Auto') }} @endsection
@section('page_title') {{ __('Mon Park Automobile') }}   @endsection

@section('content') 
    <div class="p-4 flex items-center justify-between">
        <div class="">
            <button class="btn btn-primary"> <i class="fas fa-plus"></i> Ajouter
        </div>

        <div class="flex gap-3">
            <div class="py-2 px-3 rounded-lg border cursor-pointer hover:border-gray-500 ">
                <span class="text-gray-400 text-xs">Trier par:</span> 
                <select name="" id="" class="bg-transparent">
                    <option value="marque">Marque</option>
                    <option value="marque">Disponibilité</option>
                    <option value="marque">Matricule</option>
                </select>
            </div>

            <div class="py-2 px-3 rounded-lg border cursor-pointer hover:border-gray-500 ">
                <span class="text-gray-400 text-xs">Filtrer</span> 
                <span class="px-2"> <i class="fas fa-sliders-h"></i> </span>
            </div>

            <div class="flex gap-2">
                <button class="btn"><i class="far fa-list-alt"></i></button>
                <button class="btn btn-primary"><i class="fas fa-th"></i></button>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 px-4">
        @foreach ($cars as $car)
           <a href="" class="col-span-1 card pb-0 rounded-xl m-0 shadow-md relative cursor-pointer hover:shadow-lg 
           transition duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-100">
                <div class="absolute shadow-lg border top-0 right-0 p-2 rounded-full m-4" style="background-color: {{ $car['color'] }}"></div>
                <div class="bg-gray-800 text-gray-100 rounded-lg py-1 px-2 text-xs inline">
                    {{ $car['matricule'] }}
                </div>

                <img class="object-cover w-16 h-16 mx-auto rounded-full cursor-pointer my-2" src="{{ $car['image'] }}">
                
                <div class="text-center text-gray-800 text-sm">
                    <h1 class="inline">{{ $car['marque'] }}</h1>
                    <span class="text-gray-600 text-xs">{{ $car['serie'] }}</span>  
                    <h1 class="">{{ $car['carburant'] }}</h1>                  
                </div>
                @if ($car['status'] == 1)
                    <div class="my-2 py-1 text-xs bg-green-200 text-green-700 border-green-400 text-center rounded-xl border mx-auto w-20">
                        Disponible
                    </div>   
                @elseif ($car['status'] == 0)
                    <div class="my-2 py-1 text-xs bg-red-200 text-red-700 border-red-400 text-center rounded-xl border mx-auto w-20">
                        Location
                    </div>                 
                @else
                    <div class="my-2 py-1 text-xs bg-gray-200 text-gray-700 border-gray-400 text-center rounded-xl border mx-auto w-20">
                        En Panne
                    </div> 
                @endif

                <div class="py-1 border-b"></div>

                <div class="flex items-center justify-between py-4">
                    <div class="text-xs text-gray-400">
                        <i class="far fa-calendar-alt"></i> Nov. 15, 2019
                    </div>
                </div>

            </a>             
        @endforeach
        
    </div>

@endsection