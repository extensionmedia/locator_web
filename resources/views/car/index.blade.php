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

    <div class="grid grid-cols-4 gap-4 px-4">
        @for ($i = 0; $i < 11; $i++)
           <div class="col-span-1 card rounded-xl m-0 shadow-md relative">
                <div class="absolute top-0 right-0 p-2 bg-red-700 rounded-full m-2"></div>
                <div class="bg-gray-800 text-gray-100 rounded-lg py-1 px-2 text-xs inline">
                    145874-A-40
                </div>
                <h1 class="text-xl text-gray-600">Honda Jazz</h1>
                <img class="object-cover w-16 h-16 rounded-full cursor-pointer" src="https://th.bing.com/th/id/OIP.wiGLjnZOQxFr2eV4I0-mXAHaEd?w=310&amp;h=186&amp;c=7&amp;o=5&amp;pid=1.7">
            </div> 
        @endfor
        
    </div>

@endsection