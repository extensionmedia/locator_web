@extends('layouts.locator')

@section('title') {{ __('Park Auto') }} @endsection
@section('page_title') {{ __('Mon Park Automobile') }}   @endsection

@section('content') 
    <div class="py-4 lg:p-4 flex items-center justify-between">
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

    <div class="lg:px-4">
        <div class="flex items-center justify-between rounded bg-gray-200 p-2 border border-gray-300">
            <div class="flex items-center text-xs font-bold">
                <div class="w-12 mr-4"></div>
               <div class="w-24 px-2"> 
                   <div class="py-1 px-2 inline">MATRICULE </div>
               </div>
               <div class="text-gray-800 w-24 px-2"> MARQUE </div>
               <div class="text-gray-800 w-24 px-2"> SERIE </div>
               <div class=" w-24"> STATUS </div> 
               <div class=" w-24"> LOCATIONS </div>
               <div class=" w-24"> DEPENSES </div>
           </div> 
           
           <div class=""></div>           
       </div>
        @foreach ($cars as $car)
        <div class="flex items-center justify-between rounded bg-white p-2 border border-gray-200 border-l hover:bg-gray-100" style="transition: all .5s; border-left:6px solid {{ $car['color'] }}">
             <div class="flex items-center ">
                <img class="object-cover w-12 h-12 rounded-full mr-4" src="{{ $car['image'] }}">
                <div class="w-24"> 
                    <div class="bg-gray-800 text-gray-100 rounded-lg py-1 px-2 text-xs inline">{{ $car['matricule'] }} </div>
                </div>
                <div class="text-gray-800 text-sm w-24"> {{ $car['marque'] }} </div>
                <div class="text-gray-800 text-sm w-24"> {{ $car['serie'] }} </div>
                
                @if ($car['status'] == 1)
                    <div class="my-2 py-1 px-2 text-xs bg-green-200 text-green-700 border-green-400 text-center rounded-xl border">
                        Disponible
                    </div>   
                @elseif ($car['status'] == 0)
                    <div class="my-2 py-1 px-2 text-xs bg-red-200 text-red-700 border-red-400 text-center rounded-xl border">
                        Location
                    </div>                 
                @else
                    <div class="my-2 py-1 px-2 text-xs bg-gray-200 text-gray-700 border-gray-400 text-center rounded-xl border">
                        En Panne
                    </div> 
                @endif
            </div> 
            
            <div class="">
                <button class="btn"><i class="fas fa-ellipsis-h"></i></button>
            </div>           
        </div>

        @endforeach


    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 px-4 hidden">
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