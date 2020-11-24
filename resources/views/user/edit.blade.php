@extends('layouts.locator')

@section('title') {{ __('Utilisateur : ') . $user["name"] }} @endsection
@section('page_title') {{ __('Fiche Utilisateur') }}   @endsection

@section('content')
     
    <div class="p-4 shadow flex items-center justify-between bg-white rounded m-3 mb-6">
        <div class="flex items-center">
            <img class="object-cover w-24 h-24 rounded-full cursor-pointer" src="{{ $user["profile_photo_path"] }}">
            <div class="text-lg ml-6">
                <div class="text-gray-600 font-bold">{{ $user["name"] }}</div>
                <div class="text-gray-400">{{ $user["user_profile"] }}</div>
            </div>

        </div>            
        <button class="border py-2 px-4 rounded-lg text-sm hover:bg-orange-100 focus:outline-none active:bg-orange-200">
            {{ __('Changer Photo') }}
        </button>
    </div>  

    <div class="p-4 shadow bg-white rounded m-3">
        <h1 class="text-lg font-bold text-gray-600 mb-4 mt-2">{{ __('Les informations Utilisateur') }}</h1>

        <div class="flex gap-3 mb-3">
            <div class="flex-1">
                <label for="name" class="block text-xs text-gray-600">Nom Utilisateur *</label>
                <input type="text" id="name" name="name" class="w-full rounded-lg border border-orange py-1 px-3 mt-1" value="{{ $user["name"] }}">
            </div>

            <div class="flex-1">
                <label for="email" class="block text-xs text-gray-600">Adresse E-Mail *</label>
                <input type="text" id="email" name="email" class="w-full rounded-lg border border-orange py-1 px-3 mt-1" value="{{ $user["email"] }}">
            </div>
        </div>

        <div class="flex gap-3">
            <div class="flex-1">
                <label for="adresse" class="block text-xs text-gray-600">Adresse *</label>
                <input type="text" id="adresse" name="adresse" class="w-full rounded-lg border border-orange py-1 px-3 mt-1" value="{{ $user["name"] }}">
            </div>
        </div>
    </div>

@endsection

@dump($user)