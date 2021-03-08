@extends('layouts.locator')

@section('title') Contrat N° : {{ str_pad($rent->id, 6, "0", STR_PAD_LEFT ) }} @endsection
@section('page_title') 
    <a href="{{ URL::previous() }}" class="py-1 px-2 bg-orange-300 text-gray-100 rounded-xl hover:bg-orange-400 mr-2">
        <i class="fas fa-arrow-left"></i>
    </a>  
    Contrat N° : {{ str_pad($rent->id, 6, "0", STR_PAD_LEFT ) }} 
@endsection

@section('content')
    <div class="has-modal">
        <div class="flex justify-between items-center p-3">
            <div class="flex gap-3">
                <a href="{{route('contrat.create')}}" class="btn"><i class="far fa-file-alt"></i> Aperçu</a>     
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
            <!-- Left Section -->
            <div class="w-2/3">
                <!-- Vehicule -->
                <div class="card m-0 mb-3 relative">
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
                    <div class="absolute top-0 right-0 m-3">
                        <button class="btn py-1 px-2"><i class="fas fa-ellipsis-h"></i></button>
                    </div>
                </div>

                <!-- Conducteurs -->
                <div class="flex gap-3 mb-3">
                    <!-- Conducteurs Principal -->
                    <div class="card flex-1 m-0 relative">
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
                        <div class="absolute top-0 right-0 m-3">
                            <button class="btn py-1 px-2"><i class="fas fa-ellipsis-h"></i></button>
                        </div>
                    </div>     
                    
                    <!-- Conducteurs Secondaire -->
                    <div class="card flex-1 m-0 relative">
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
                        <div class="absolute top-0 right-0 m-3">
                            <button class="btn py-1 px-2"><i class="fas fa-ellipsis-h"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Section -->
            <div class="w-1/3">
                <div class="card m-0 mb-3 border border-pink-400 relative">
                    <div class="text-4xl text-center font-extralight">@money($rent->car_rent_total) MAD</div>
                    <div class="text-xs text-center font-light -mt-2 text-pink-400 font-bold">@money(ceil($rent->car_rent_total / $rent->car_rent_days)) MAD / Jr</div>
                    <div class="flex items-center w-64 mt-6 mx-auto">
                        <div class="w-24 text-xs text-center py-1 font-bold rounded px-2 bg-green-200 text-green-800">{{ $rent->car_rent_start_date }}</div>
                        <div class="flex-1 border-b text-center">
                                {{ $rent->car_rent_days }}
                        </div>
                        <div class="w-24 text-xs text-center py-1 font-bold rounded px-2 bg-red-200 text-red-800">{{ $rent->car_rent_end_date }}</div>
                    </div>
                    <div class="absolute top-0 right-0 m-3">
                        <div class="dropdown relative">
                            <button class="btn py-1 px-2"><i class="fas fa-ellipsis-h"></i></button>
                            <div class="dropdown-content absolute right-0 hidden bg-red-100 p-2 rounded border">Content</div>                            
                        </div>
                    </div>
                </div>
                <!-- Rent Statuses -->
                <div class="card m-0 mb-3 relative">
                    <div class="flex justify-between items-center">
                        <h1 class="text-lg font-bold text-gray-600 mb-2">{{ __('Statuts') }}</h1>
                    </div>
                    <div class="-mx-4 border-t border-gray-200 mb-3"></div>

                    <div class="">
                        @foreach ($rent->statuses as $status)
                            <div class="flex justify-between items-center py-2">
                                <div class="text-xs font-bold">{{$status->rent_status_date}}</div>
                                <div class="text-xs ">
                                    {!! str_replace('[]', $status->carRentStatus->car_rent_status, $status->carRentStatus->car_rent_status_icon) !!} 
                                </div>
                            </div>                        
                        @endforeach
                    </div>
                    <div class="absolute top-0 right-0 m-3">
                        <button class="btn py-1 px-2 modal" data-container="has-modal"><i class="fas fa-plus"></i></button>
                    </div>
                </div>

                <!-- Rent Paiements -->
                <div class="card m-0 mb-3 relative">
                    <div class="flex justify-between items-center">
                        <h1 class="text-lg font-bold text-gray-600 mb-2">{{ __('Paiements') }}</h1>
                    </div>
                    <div class="-mx-4 border-t border-gray-200 mb-3"></div>

                    <div class="">
                        @forelse ($rent->paiements as $paiement)
                            <div class="bg-green-100 border border-green-300 rounded px-2 pb-3 mb-2">
                                <div class="flex justify-between items-center py-2 ">
                                    <div class="text-xs font-bold flex items-center">
                                        {{$paiement->account_mouvement_date}}
                                    </div>
                                    <div class="text-xl text-green-700 font-bold">
                                        @money($paiement->account_mouvement_in)
                                    </div>
                                </div>   
                                <div class="text-right -mt-3 pb-2 font-bold">
                                    <div class="text-xs"> {{$paiement->type->payment_type}}</div>
                                </div>   
                                <div class="">
                                    <div class="text-xs"> {{$paiement->description}}</div>
                                </div>  
                                <div class="">
                                    <div class=""> {{$paiement->category->finance_account_mouvement_category}}</div>
                                </div>                      
                            </div>                        
                        @empty
                            <div class="bg-gray-200 border border-gray-300 rounded p-2 text-gray-600 text-xs">
                                <i class="fas fa-info-circle"></i> Aucun Paiement
                            </div>
                        @endforelse

                    </div>
                    <div class="absolute top-0 right-0 m-3">
                        <button class="btn py-1 px-2 modal" data-container="has-modal"><i class="fas fa-plus"></i></button>
                    </div>
                </div>

                <!-- Rent Depenses -->
                <div class="card m-0 relative">
                    <div class="flex justify-between items-center">
                        <h1 class="text-lg font-bold text-gray-600 mb-2">{{ __('Dépenses') }}</h1>
                    </div>
                    <div class="-mx-4 border-t border-gray-200 mb-3"></div>

                    <div class="">
                        @forelse ($rent->depenses as $paiement)
                            <div class="bg-pink-100 border border-pink-300 rounded px-2 pb-3 mb-2">
                                <div class="flex justify-between items-center py-2 ">
                                    <div class="text-xs font-bold flex items-center">
                                        {{$paiement->account_mouvement_date}}
                                    </div>
                                    <div class="text-xl text-pink-700 font-bold">
                                        @money($paiement->account_mouvement_out)
                                    </div>
                                </div>   
                                <div class="text-right -mt-3 pb-2 font-bold">
                                    <div class="text-xs"> {{$paiement->type->payment_type}}</div>
                                </div>   
                                <div class="">
                                    <div class="text-xs"> {{$paiement->description}}</div>
                                </div>  
                                <div class="">
                                    <div class=""> {{$paiement->category->finance_account_mouvement_category}}</div>
                                </div>                      
                            </div>                        
                        @empty
                            <div class="bg-gray-200 border border-gray-300 rounded p-2 text-gray-600 text-xs">
                                <i class="fas fa-info-circle"></i> Aucun Depense
                            </div>
                        @endforelse
                    </div>
                    <div class="absolute top-0 right-0 m-3">
                        <button class="btn py-1 px-2 modal" data-container="has-modal"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>        
    </div>

   


@endsection