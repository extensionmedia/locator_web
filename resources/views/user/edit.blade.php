@extends('layouts.locator')

@section('title') {{ __('Utilisateur : ') . $user["name"] }} @endsection
@section('page_title') {{ __('Fiche Utilisateur') }}   @endsection

@section('content')
     
    <div class="p-4 shadow flex items-center justify-between bg-white rounded m-3 mb-6">
        <div class="flex items-center">
            <img class="object-cover w-24 h-24 rounded-full cursor-pointer" src="{{ $user["profile_photo_path"] }}">
            <div class="text-lg ml-6">
                <div class="text-gray-600 font-bold">{{ $user["name"] }}</div>
                <div class=" text-gray-400">{{ $user["user_profile"] }}</div>
                <div class="text-gray-400">{{ $user["entreprise_raison_sociale"] }}</div>
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
                <label class="block">
                    <span class="text-gray-700">Nom Utilisateur *</span>
                    <input value="{{ $user["name"] }}" type="text" id="name" name="name" class="form-input mt-1 block w-full" placeholder="Nom Utilisateur">
                </label>
            </div>

            <div class="flex-1">
                <label class="block">
                    <span class="text-gray-700">Profile</span>
                    <select name="user_profile_id" id="user_profile_id" class="form-select mt-1 block w-full">
                        @foreach ($user_profiles as $profile)
                            <option value="{{ $profile->id }}">{{ $profile->user_profile }}</option> 
                        @endforeach
                    </select>
                </label>
            </div>
        </div>

        <div class="mb-3">
            <div class="flex-1">
                <label class="block">
                    <span class="text-gray-700">Adresse *</span>
                    <input value="{{ $user["user_address"] }}"  type="text" id="adresse" name="adresse" class="form-input mt-1 block w-full" placeholder="Nom Adresse">
                </label>
            </div>
        </div>

        <div class="flex gap-3 mb-3">
            <div class="flex-1">
                <label class="block">
                    <span class="text-gray-700">Téléphone *</span>
                    <input value="{{ $user["telephone"] }}"  type="text" id="telephone" name="telephone" class="form-input mt-1 block w-full" placeholder="+212661098984">
                </label>
            </div>
            <div class="flex-1">
                <label class="block">
                    <span class="text-gray-700">Adresse E-Mail *</span>
                    <input value="{{ $user["email"] }}"  type="email" id="email" name="email" class="form-input mt-1 block w-full" placeholder="exemple@email.com">
                </label>
            </div>
        </div>

        <div class="mb-3">
            <div class="flex-1">
                <label class="block">
                    <span class="text-gray-700">CIN *</span>
                    <input value="{{ $user["cin"] }}"  type="text" id="cin" name="cin" class="form-input mt-1 block w-full" placeholder="AB 123456">
                </label>
            </div>
        </div>

        <div class="flex mt-6">
            <label class="flex items-center">
              <input type="checkbox" class="form-checkbox">
              <span class="ml-2">Je suis Gérant</span>
            </label>
        </div>

        <div class="flex mt-6">
            <label class="flex items-center">
              <input type="checkbox" class="form-checkbox">
              <span class="ml-2">Compte Activé</span>
            </label>
        </div>
    </div>

@endsection

@dump($user)