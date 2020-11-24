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
                    <input value="{{ $user["name"] }}"  type="text" id="adresse" name="adresse" class="form-input mt-1 block w-full" placeholder="Nom Utilisateur">
                </label>
            </div>
        </div>

        <div class="flex gap-3 mb-3">
            <div class="flex-1">
                <label for="telephone" class="block text-xs text-gray-600">Téléphone *</label>
                <input type="text" id="telephone" name="telephone" class="w-full rounded-lg border border-orange py-1 px-3 mt-1" value="{{ $user["telephone"] }}">
            </div>

            <div class="flex-1">
                <label for="email" class="block text-xs text-gray-600">Adresse E-Mail *</label>
                <input type="text" id="email" name="email" class="w-full rounded-lg border border-orange py-1 px-3 mt-1" value="{{ $user["email"] }}">
            </div>
        </div>

        <label class="block mt-4">
            <span class="text-gray-700">Requested Limit</span>
            <select class="form-select mt-1 block w-full">
              <option>$1,000</option>
              <option>$5,000</option>
              <option>$10,000</option>
              <option>$25,000</option>
            </select>
        </label>

        <div class="mb-3">
            <div class="">
                <label for="cin" class="block text-xs text-gray-600">CIN</label>
                <input type="text" id="cin" name="cin" class="w-32 rounded-lg border border-orange py-1 px-3 mt-1" value="{{ $user["cin"] }}">
            </div>
        </div>
        <div class="flex mt-6">
            <label class="flex items-center">
              <input type="checkbox" class="form-checkbox">
              <span class="ml-2">I agree to the <span class="underline">privacy policy</span></span>
            </label>
        </div>
    </div>

@endsection

@dump($user)