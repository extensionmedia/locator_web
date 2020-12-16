@extends('layouts.locator')

@section('title')  Contrat N° : {{ str_pad($rent->id, 6, "0", STR_PAD_LEFT ) }} @endsection
@section('page_title')  Contrat N° : {{ str_pad($rent->id, 6, "0", STR_PAD_LEFT ) }} @endsection

@section('content')
    <div class="flex justify-between items-center p-3">
        <div class="flex gap-3">
            <button class="btn"><i class="far fa-file-alt"></i> Aperçu</button>     
            <button class="btn"><i class="far fa-file-alt"></i> Paiement</button>         
            <button class="btn"><i class="far fa-envelope"></i> Email</button>
            <button class="btn bg-green-400 text-gray-100"><i class="fab fa-whatsapp"></i> Whatsapp</button>
        </div>
        <div class="flex gap-3">
            <button class="btn"><i class="far fa-copy"></i> Dupliquer</button> 
            <button class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>
        </div>
    </div>
    <div class="flex px-3 gap-3">

        <div class="w-2/3">
            <div class="flex relative gap-3 mb-3">
                <!-- Rent Dates -->
                <div class="card w-1/2 m-0 text-center">
                    <div class="text-4xl font-bold text-gray-800">
                        {{ $rent->car_rent_days }}
                    </div>
                    <div class="flex gap-2">
                        <input class="form-input text-xs flex-1 bg-orange-200 text-orange-600 text-center font-bold w-full" value="{{ $rent->car_rent_start_date }}">
                        <input class="form-input text-xs flex-1 bg-pink-200 text-pink-600 text-center font-bold w-full" value="{{ $rent->car_rent_end_date }}">
                    </div>
                </div>

                <!-- Rent Prices -->
                <div class="card w-1/2 m-0 flex items-center gap-2 py-7">
                    <div class="w-36">
                        <label class="block relative">
                            <span class="text-gray-700">Prix / Jours</span>
                            <input value="{{ ceil($rent->car_rent_total / $rent->car_rent_days) }}" type="number" id="name" name="name" class="form-input mt-1 pr-6 block w-full text-right font-bold" placeholder="0.00">
                            <span class="absolute top-0 right-0 mt-9 font-light mr-2 text-xs"> MAD</span>
                        </label>
                    </div>
                    <div class="font-bold pt-6 w-10"> x {{ $rent->car_rent_days }}</div>
                    <div class="w-36">
                        <label class="block text-right relative">
                            <span class="text-gray-700 text-right">Total</span>
                            <input value="{{ $rent->car_rent_total }}" type="number" id="name" name="name" class="form-input mt-1 pr-6 block w-full text-right font-bold" placeholder="0.00">
                            <span class="absolute top-0 right-0 mt-9 font-light mr-2 text-xs"> MAD</span>
                        </label>
                    </div>
                </div>        
            </div>

            <!-- Vehicule Detail -->
            <div class="card m-0 mb-3">
                <h1 class="text-lg font-bold text-gray-600 mb-2">{{ __('Vehicule') }}</h1>
                <div class="-mx-4 border-t border-gray-200 mb-3"></div>

                <div class="flex items-center relative">
                    <img class="object-cover m-auto w-24 h-24 rounded-full cursor-pointer" src="{{ $rent->car->car_photo }}">
                    <div class="absolute text-center w-full">
                        <div class="rounded w-28 m-auto bg-gray-600 text-gray-100 mt-16 py-1 shadow">
                            {{ $rent->car->car_matricule }}
                        </div>
                    </div>
                </div>            
                <div class="flex gap-3 mb-3 mt-3">
                    <div class="flex-1">
                        <label class="block">
                            <span class="text-gray-700">Marque</span>
                            <input disabled value="{{ $rent->car->brand->car_brand }}" type="text" id="name" name="name" class="text-xs bg-gray-100 form-input mt-1 block w-full" placeholder="Nom Utilisateur">
                        </label>
                    </div>

                    <div class="flex-1">
                        <label class="block">
                            <span class="text-gray-700">Serie</span>
                            <input disabled value="{{ $rent->car->brandSerie->car_brand_serie }}" type="text" id="name" name="name" class="text-xs bg-gray-100 form-input mt-1 block w-full" placeholder="Nom Utilisateur">
                        </label>
                    </div>
                    <div class="flex-1">
                        <label class="block">
                            <span class="text-gray-700">Carburant</span>
                            <input disabled value="{{ $rent->car->carburant->car_carburant }}" type="text" id="name" name="name" class="text-xs bg-gray-100 form-input mt-1 block w-full" placeholder="Nom Utilisateur">
                        </label>
                    </div>

                    <div class="flex-1">
                        <label class="block">
                            <span class="text-gray-700">B. Vitesse</span>
                            <input disabled value="{{ $rent->car->gearbox->car_gearbox }}" type="text" id="name" name="name" class="text-xs bg-gray-100 form-input mt-1 block w-full" placeholder="Nom Utilisateur">
                        </label>
                    </div>
                </div>
            </div>

            <div class="flex gap-3 mb-3">
                <!-- Rent Details -->
                <div class="card flex-1 m-0">
                    <h1 class="text-lg font-bold text-gray-600 mb-2">{{ __('Client Principal') }}</h1>
                    <div class="-mx-4 border-t border-gray-200 mb-3"></div>

                    <label class="block">
                        <span class="text-gray-700">Nom Client</span>
                        <input value="{{ $rent->client->client_name }}" type="text" id="name" name="name" class="form-input mt-1 block w-full" placeholder="Nom Client">
                    </label>

                    <label class="block">
                        <span class="text-gray-700">Téléphone</span>
                        <input value="{{ $rent->client->client_telephone }}" type="text" id="name" name="name" class="form-input mt-1 block w-full" placeholder="Téléphone">
                    </label>

                    <div class="flex">
                        <label class="block">
                            <span class="text-gray-700">N° CIN</span>
                            <input value="{{ $rent->client->client_cin }}" type="text" id="name" name="name" class="form-input mt-1 block w-full" placeholder="N° CIN">
                        </label>

                        <label class="block">
                            <span class="text-gray-700">D. Expiration</span>
                            <input value="{{ $rent->client->client_cin_date_expiration }}" type="text" id="name" name="name" class="form-input mt-1 block w-full" placeholder="Date Expiration">
                        </label>                
                    </div>

                    <div class="flex">
                        <label class="block">
                            <span class="text-gray-700">N° Permis</span>
                            <input value="{{ $rent->client->client_permis }}" type="text" id="name" name="name" class="form-input mt-1 block w-full" placeholder="N° Permis">
                        </label>

                        <label class="block">
                            <span class="text-gray-700">D. Expiration</span>
                            <input value="{{ $rent->client->client_permis_date_expiration }}" type="text" id="name" name="name" class="form-input mt-1 block w-full" placeholder="Date Expiration">
                        </label>                
                    </div>
                </div>     
                
                <!-- Rent Details -->
                <div class="card flex-1 m-0">
                    <h1 class="text-lg font-bold text-gray-600 mb-2">{{ __('Client Secondaire') }}</h1>
                    <div class="-mx-4 border-t border-gray-200 mb-3"></div>

                    <label class="block">
                        <span class="text-gray-700">Nom Client</span>
                        <input value="{{ $rent->secondClient->client_name }}" type="text" id="name" name="name" class="form-input mt-1 block w-full" placeholder="Nom Client">
                    </label>

                    <label class="block">
                        <span class="text-gray-700">Téléphone</span>
                        <input value="{{ $rent->secondClient->client_telephone }}" type="text" id="name" name="name" class="form-input mt-1 block w-full" placeholder="Téléphone">
                    </label>

                    <div class="flex">
                        <label class="block">
                            <span class="text-gray-700">N° CIN</span>
                            <input value="{{ $rent->secondClient->client_cin }}" type="text" id="name" name="name" class="form-input mt-1 block w-full" placeholder="N° CIN">
                        </label>

                        <label class="block">
                            <span class="text-gray-700">D. Expiration</span>
                            <input value="{{ $rent->secondClient->client_cin_date_expiration }}" type="text" id="name" name="name" class="form-input mt-1 block w-full" placeholder="Date Expiration">
                        </label>                
                    </div>

                    <div class="flex">
                        <label class="block">
                            <span class="text-gray-700">N° Permis</span>
                            <input value="{{ $rent->secondClient->client_permis }}" type="text" id="name" name="name" class="form-input mt-1 block w-full" placeholder="N° Permis">
                        </label>

                        <label class="block">
                            <span class="text-gray-700">D. Expiration</span>
                            <input value="{{ $rent->secondClient->client_permis_date_expiration }}" type="text" id="name" name="name" class="form-input mt-1 block w-full" placeholder="Date Expiration">
                        </label>                
                    </div>

                </div>
            </div>
        </div>

        <div class="w-1/3">
            <div class="card m-0">
                <div class="flex justify-between items-center">
                    <h1 class="text-lg font-bold text-gray-600 mb-2">{{ __('Statuts') }}</h1>
                    <button class="btn -mt-4 border-0 text-xl text-pink-600 p-1"><i class="far fa-plus-square"></i></button>
                </div>
                <div class="-mx-4 border-t border-gray-200 mb-3"></div>

                <div class="">
                    @foreach ($rent->statuses as $status)
                        <div class="flex justify-between items-center py-2">
                            <div class="text-xs font-bold">{{$status->rent_status_date}}</div>
                            <div class="text-xs ">
                                {!! str_replace('[]', $status->car_rent_status, $status->car_rent_status_icon) !!} 
                            </div>
                        </div>                        
                    @endforeach
                </div>
            </div>
        </div>
    </div>
   


@endsection