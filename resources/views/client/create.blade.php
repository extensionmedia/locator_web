@extends('layouts.locator')

@section('title') Ajouter Client @endsection
@section('page_title') 
    <a href="{{ URL::previous() }}" class="py-1 px-2 bg-orange-300 text-gray-100 rounded-xl hover:bg-orange-400 mr-2">
        <i class="fas fa-arrow-left"></i>
    </a>  
    Ajouter Nouveau Client
@endsection

@section('content')
<form method="POST" action="{{ route('client.store') }}">
    <div class="flex justify-between items-center p-3">
        <div class="flex gap-3"></div>
        <div class="flex gap-3">
            <button class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>
        </div>
    </div>
    <div class="card xl:w-3/4 xl:mx-auto relative">
        <div class="max-w-full overflow-auto">
            <!-- Images Client -->
        </div>
        <div class="absolute bottom-0 right-0 left-0 text-center pb-2">
            <button class="btn text-white bg-green-400 border-green-300"><i class="fas fa-cloud-upload-alt"></i> Upload</button>
        </div>
    </div>

    <div class="xl:w-3/4 xl:mx-auto">
        <div class="flex gap-4">
            @csrf
            <div class="flex-1">
                <!-- Informations Client -->
                <div class="card m-0 mb-4">
                    <h1 class="text-lg font-bold text-gray-600 mb-2">{{ __('Les informations Client') }}</h1>
                    <div class="-mx-4 border-t border-gray-200 mb-6"></div>

                    <div class="flex gap-3 mb-3">
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Nom Client *</span>
                                <input value="{{ old('client_name') }}" type="text" id="client_name" name="client_name" class="form-input mt-1 block w-full" placeholder="Nom Client">
                                @error('client_name') <div class="text-red-500">{{ $message }}</div> @enderror
                            </label>
                        </div>
            
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Date Naissance</span>
                                <input value="{{ date('Y-m-d') }}" type="date" id="client_date_naissance" name="client_date_naissance" class="form-input mt-1 block w-full">
                            </label>
                        </div>
                    </div>
                    <div class="flex gap-3 mb-3">
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Téléphone(1)</span>
                                <input value="{{ old('client_telephone_1') }}" type="text" id="client_telephone_1" name="client_telephone_1" class="form-input mt-1 block w-full" placeholder="Téléphone">
                                @error('client_telephone_1') <div class="text-red-500">{{ $message }}</div> @enderror
                            </label>
                        </div>
            
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Téléphone(2)</span>
                                <input value="{{ old('client_telephone_2') }}" type="text" id="client_telephone_2" name="client_telephone_2" class="form-input mt-1 block w-full" placeholder="Téléphone">
                            </label>
                        </div>
                    </div>
                    <div class="flex gap-3 mb-3">
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Email</span>
                                <input value="{{ old('client_email') }}" type="text" id="client_email" name="client_email" class="form-input mt-1 block w-full" placeholder="Email">
                            </label>
                        </div>
                    </div>
                    <div class="flex gap-3 mb-3">
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Ville *</span>
                                <input value="{{ old('client_city') }}" type="text" id="client_city" name="client_city" class="form-input mt-1 block w-full" placeholder="Ville Client">
                            </label>
                        </div>
                    </div>

                    <div class="flex gap-3 mb-3">
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Adresse *</span>
                                <input value="{{ old('client_adresse') }}" type="text" id="client_adresse" name="client_adresse" class="form-input mt-1 block w-full" placeholder="Adresse Client">
                            </label>
                        </div>
                    </div>
                </div>   
                
                <!-- Identifiant Client -->
                <div class="card m-0">
                    <h1 class="text-lg font-bold text-gray-600 mb-2">{{ __('Identite Client') }}</h1>
                    <div class="-mx-4 border-t border-gray-200 mb-6"></div>

                    <div class="flex gap-3 mb-3">
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">N. CIN</span>
                                <input value="{{ old('client_cin') }}" type="text" id="client_cin" name="client_cin" class="form-input mt-1 block w-full" placeholder="CIN">
                            </label>
                        </div>
            
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Date Expiration</span>
                                <input value="{{ date('Y-m-d') }}" type="date" id="client_cin_date_expiration" name="client_cin_date_expiration" class="form-input mt-1 block w-full">
                            </label>
                        </div>
                    </div>

                    <div class="flex gap-3 mb-3">
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">N. Passport</span>
                                <input value="{{ old('client_passport') }}" type="text" id="client_passport" name="client_passport" class="form-input mt-1 block w-full" placeholder="Passport">
                            </label>
                        </div>
            
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Date Expiration</span>
                                <input value="{{ date('Y-m-d') }}" type="date" id="client_passport_date_expiration" name="client_passport_date_expiration" class="form-input mt-1 block w-full">
                            </label>
                        </div>
                    </div>
                    <div class="flex gap-3 mb-3">
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Nationalite</span>
                                <input value="{{ old('client_nationality') }}" type="text" id="client_nationality" name="client_nationality" class="form-input mt-1 block w-full" placeholder="Nationalite Client">
                            </label>
                        </div>
                    </div>
                    <div class="flex gap-3 mb-3">
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">N. Permis</span>
                                <input value="{{ old('client_permis') }}" type="text" id="client_permis" name="client_permis" class="form-input mt-1 block w-full" placeholder="Permis">
                            </label>
                        </div>
                        <div class="w-20">
                            <label class="block">
                                <span class="text-gray-700">Type</span>
                                <input value="{{ old('client_permis_type') }}" type="text" id="client_permis_type" name="client_permis_type" class="form-input mt-1 block w-full text-center font-bold" placeholder="Type">
                            </label>
                        </div>
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Date Expiration</span>
                                <input value="" type="date" id="client_permis_date_expiration" name="client_permis_date_expiration" class="form-input mt-1 block w-full">
                                @error('client_permis_date_expiration') <div class="text-red-500">{{ $message }}</div> @enderror
                            </label>
                        </div>
                    </div>
                    <div class="flex gap-3 mb-3">
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Date Livraison</span>
                                <input value="{{ date('Y-m-d') }}" type="date" id="client_permis_date_livraison" name="client_permis_date_livraison" class="form-input mt-1 block w-full">
                            </label>
                        </div>
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Lieu Livraison</span>
                                <input value="{{ old('client_permis_lieu_livraison') }}" type="text" id="client_permis_lieu_livraison" name="client_permis_lieu_livraison" class="form-input mt-1 block w-full" placeholder="Permis">
                            </label>
                        </div>

                    </div>
                </div>                
            </div>

            <!-- Status Client -->
            <div class="card m-0 w-64 h-80">
                <label class="block mb-4">
                    <span class="text-gray-700">Status</span>
                    <select name="client_status_id" id="client_status_id" class="form-select mt-1 block w-full">
                        @foreach ($client_statuses as $status)
                            <option @if ($status->id_default) selected @endif value="{{ $status->id }}">{{ $status->client_status }}</option> 
                        @endforeach
                    </select>
                </label>

                <label class="block mb-4">
                    <span class="text-gray-700">Category</span>
                    <select name="client_category_id" id="client_category_id" class="form-select mt-1 block w-full">
                        @foreach ($client_categories as $category)
                            <option @if ($category->is_default) selected @endif value="{{ $category->id }}">{{ $category->client_category }}</option> 
                        @endforeach
                    </select>
                </label>

                <label class="block">
                    <span class="text-gray-700">Type</span>
                    <select name="client_type_id" id="client_type_id" class="form-select mt-1 block w-full">
                        @foreach ($client_types as $type)
                            <option @if ($type->is_default) selected @endif value="{{ $type->id }}">{{ $type->client_type }}</option> 
                        @endforeach
                    </select>
                </label>
            </div> 
        </div>
    </div>
</form>



@endsection