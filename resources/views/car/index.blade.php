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
           <div class="col-span-1 card rounded-xl m-0 shadow-md">123</div> 
        @endfor
        
    </div>

@endsection