@extends('layouts.locator')

@section('title') {{ __('Park Auto') }} @endsection
@section('page_title') {{ __('Mon Park Automobile') }}   @endsection

@section('content') 
    <div class="py-4 lg:p-4 flex items-center justify-between hidden">
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
                <button class="btn" wire:click="change"><i class="far fa-list-alt"></i></button>
                <button class="btn btn-primary" wire:click="change"><i class="fas fa-th"></i></button>
            </div>
        </div>
    </div>

    <livewire:show-cars />

    
@endsection