@extends('layouts.locator')

@section('title') {{ __('Utilisateur : ') . $user["name"] }} @endsection
@section('page_title') {{ __('Fiche Utilisateur') }}   @endsection

@section('content')
    
    <!-- Photo Profile -->
    <div class="p-4 shadow flex items-center justify-between bg-white rounded m-3 mb-6 relative">
        <div class="flex items-center">
            <img class="object-cover w-24 h-24 rounded-full cursor-pointer" src="{{ $user["profile_photo_path"] }}">
            <div class="text-lg ml-6">
                <div class="text-gray-600 font-bold">{{ $user["name"] }}</div>
                <div class=" text-gray-400">{{ $user["user_profile"] }}</div>
                <div class="text-orange-400 text-xs">{{ $user["entreprise_raison_sociale"] }}</div>
            </div>

        </div>            
        <button class="upload_image border border-pink-700 py-2 px-4 rounded-lg text-sm bg-pink-500 text-white hover:bg-pink-400 focus:outline-none active:bg-pink-600">
            <i class="fas fa-cloud-upload-alt"></i> {{ __('Changer Photo') }}
        </button>
        <div class="upload_image_message hidden absolute top-0 right-0 bg-green-400 text-white text-xs py-1 px-3 rounded-tl-lg rounded-bl-lg mt-1">
            <i class="fas fa-check"></i> Image a été modifié
        </div>
    </div>  

    <!-- Informations Utilisateur -->
    <div class="p-4 shadow bg-white rounded m-3 mb-6">
        <h1 class="text-lg font-bold text-gray-600 mb-4 mt-2">{{ __('Les informations Utilisateur') }}</h1>
        <div class="-mx-4 border-t border-gray-200 mb-6"></div>

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

        <div class="mb-3 w-40">
            <div class="flex-1">
                <label class="block">
                    <span class="text-gray-700">CIN *</span>
                    <input value="{{ $user["cin"] }}"  type="text" id="cin" name="cin" class="form-input mt-1 block w-full" placeholder="AB 123456">
                </label>
            </div>
        </div>

        <div class="flex mt-6">
            <label class="flex items-center">
              <input type="checkbox" @if ($user["is_gerant"]) checked @endif class="form-checkbox">
              <span class="ml-2">Je suis Gérant</span>
            </label>
        </div>

        <div class="flex mt-6">
            <label class="flex items-center">
              <input type="checkbox" @if ($user["status"]) checked @endif class="form-checkbox">
              <span class="ml-2">Compte Activé</span>
            </label>
        </div>

        <div class="-mx-4 border-t border-gray-100 mt-6 mb-2"></div>

        <div class="flex items-center py-4">
            <button type="submit" class="border border-pink-700 py-2 px-4 mr-2 rounded-lg text-sm bg-pink-500 text-white hover:bg-pink-400 focus:outline-none active:bg-pink-600">
                <i class="far fa-save"></i> Enregistrer
            </button>
            <button class="border py-2 px-4 rounded-lg text-sm bg-white text-gray-600 hover:bg-gray-100 focus:outline-none active:bg-gray-200">Annuler</button>
        </div>

    </div>

    <!-- Mots de passe et Securite -->
    <div class="p-4 shadow bg-white rounded m-3 mb-6 relative">
        <h1 class="text-lg font-bold text-gray-600 mb-4 mt-2">{{ __('Mots de passe et Securité') }}</h1>
        <div class="flex items-center justify-between">
            <div class="">
                <p class="text-xs">
                    Modifier le mots de passe
                    <div class="text-orange-600 text-xs font-bold">
                        <i class="fas fa-info-circle"></i> Vous avez modifié le mot de passe il y a 5 jours 
                    </div>
                </p>                
            </div>
            <div class="">
                <button class="reset_password border border-pink-700 py-2 px-4 rounded-lg text-sm bg-pink-500 text-white hover:bg-pink-400 focus:outline-none active:bg-pink-600">
                    <i class="far fa-envelope-open"></i> {{ __('Recevoir le lien') }}
                </button>
            </div>
        </div>
        <div class="reset_password_message hidden absolute top-0 right-0 bg-green-400 text-white text-xs py-1 px-3 rounded-tl-lg rounded-bl-lg mt-1">
            <i class="fas fa-check"></i> Le lien vous a été envoyé par email
        </div>
    </div>
@endsection