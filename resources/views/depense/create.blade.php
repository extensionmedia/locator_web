@extends('layouts.locator')

@section('title') Ajouter Dépense @endsection
@section('page_title') 
    <a href="{{ URL::previous() }}" class="py-1 px-2 bg-orange-300 text-gray-100 rounded-xl hover:bg-orange-400 mr-2">
        <i class="fas fa-arrow-left"></i>
    </a>  
    Ajouter une Dépense
@endsection

@section('content')
<form method="POST" action="{{ route('depense.store') }}">
    <div class="flex justify-between items-center p-3">
        <div class="flex gap-3"></div>
        <div class="flex gap-3">
            <button class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>
        </div>
    </div>

    <div class="xl:w-3/4 xl:mx-auto">
        <div class="flex gap-4">
            @csrf
            <div class="flex-1">
                <!-- Depense Details -->
                <div class="card m-0 mb-4">
                    <h1 class="text-lg font-bold text-gray-600 mb-2">{{ __('Dépenses') }}</h1>
                    <div class="-mx-4 border-t border-gray-200 mb-6"></div>

                    <div class="lg:flex gap-3 mb-3">            
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Date Dépense</span>
                                <input value="{{ date('Y-m-d') }}" type="date" id="client_date_naissance" name="client_date_naissance" class="form-input mt-1 block w-full">
                            </label>
                        </div>
                        <div class="flex-1"></div>
                    </div>

                    <div class="lg:flex gap-3 mb-3">            
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Montant</span>
                                <input placeholder="0.00" type="number" id="account_mouvement_out" name="account_mouvement_out" class="placeholder-white form-input mt-1 block w-full text-center bg-green-400 text-white">
                            </label>
                        </div>
                        <div class="flex-1"></div>
                    </div>

                    <div class="flex gap-3 mb-3">            
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Description</span>
                                <input type="text" id="description" name="description" class="form-input mt-1 block w-full">
                            </label>
                        </div>
                    </div>

                </div>                                  
            </div>
            
            <div class="card m-0 w-64 h-80">
                 <!-- Type -->
                <label class="block mb-4">
                    <span class="text-gray-700">Mode Paiement</span>
                    <select name="payment_type_id" id="payment_type_id" class="form-select mt-1 block w-full">
                        @foreach ($types as $type)
                            <option @if ($type->payment_type_is_default) selected @endif value="{{ $type->id }}">{{ $type->payment_type }}</option> 
                        @endforeach
                    </select>
                </label>
                <!-- Compte -->
                <label class="block mb-4">
                    <span class="text-gray-700">Compte Finance</span>
                    <select name="finance_account_mouvement_category_id" id="finance_account_mouvement_category_id" class="form-select mt-1 block w-full">
                        @foreach ($accounts as $account)
                            <option @if ($account->is_default) selected @endif value="{{ $account->id }}">{{ $account->finance_account_name }}</option> 
                        @endforeach
                    </select>
                </label>
                <!-- Categorie -->
                <label class="block mb-4">
                    <span class="text-gray-700">Categorie</span>
                    <select name="finance_account_mouvement_category_id" id="finance_account_mouvement_category_id" class="form-select mt-1 block w-full">
                        @foreach ($categories as $category)
                            <option @if ($category->is_default) selected @endif value="{{ $category->id }}">{{ $category->finance_account_mouvement_category }}</option> 
                        @endforeach
                    </select>
                </label>
            </div> 
        </div>
    </div>
</form>

@endsection