@extends('layouts.locator');

@section('title') Location Edit @endsection
@section('page_title') Modifier @endsection

@section('content')

    <!-- Rent Dates -->
    <div class="flex items-center relative gap-3 mt-2 xl:w-3/4 xl:mx-auto">
        <div class="card w-64 m-0 text-center mx-auto">
            <div class="text-4xl font-bold text-gray-800">
                {{ $rent->car_rent_days }}
            </div>
            <div class="flex gap-2">
                <div class="flex-1 border rounded bg-green-200 text-green-600 text-xs font-bold py-1">{{ $rent->car_rent_start_date }}</div>
                <div class="flex-1 border rounded bg-red-200 text-red-600 text-xs font-bold py-1">{{ $rent->car_rent_end_date }}</div>
            </div>
        </div>
    </div>
    <!-- Rent Dates -->
    <div class="card flex items-center justify-between relative xl:w-3/4 xl:mx-auto">
        <div class="flex items-center">
            <img class="object-cover w-24 h-24 rounded-full cursor-pointer" src="{{ $rent->car->car_photo }}">


        </div>            
        <button class="upload_image btn btn-primary">
            <i class="fas fa-cloud-upload-alt"></i> {{ __('Changer Photo') }}
        </button>
        <div class="upload_image_message hidden absolute top-0 right-0 bg-green-400 text-white text-xs py-1 px-3 rounded-tl-lg rounded-bl-lg mt-1">
            <i class="fas fa-check"></i> Image a été modifié
        </div>
    </div>
    <!-- Rent Details -->
    <div class="card xl:w-3/4 xl:mx-auto">
        <h1 class="text-lg font-bold text-gray-600 mb-4 mt-2">{{ __('Locations Details') }}</h1>
        <div class="-mx-4 border-t border-gray-200 mb-6"></div>

        <div class="flex gap-3 mb-3">
            <div class="flex-1">
                <label class="block">
                    <span class="text-gray-700">Date Debut</span>
                    <input value="{{ $rent->car_rent_start_date }}" type="date" id="name" name="name" class="form-input mt-1 block w-full" placeholder="Nom Utilisateur">
                </label>
            </div>

            <div class="flex-1">
                <label class="block">
                    <span class="text-gray-700">Date Fin</span>
                    <input value="{{ $rent->car_rent_end_date }}" type="date" id="name" name="name" class="form-input mt-1 block w-full" placeholder="Nom Utilisateur">
                </label>
            </div>

            <div class="flex-1">
                <label class="block">
                    <span class="text-gray-700">Jours</span>
                    <input value="{{ $rent->car_rent_days }}" type="text" id="name" name="name" class="form-input mt-1 block w-full" placeholder="Nom Utilisateur">
                </label>
            </div>
        </div>

    </div>



    @dump($rent->paiements)
    @dump($rent->depenses)
    @dump($rent->car)
    @dump($rent->client)
@endsection