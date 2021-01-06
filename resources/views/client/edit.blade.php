@extends('layouts.locator')

@section('title') Client : {{ $client->client_name }} @endsection
@section('page_title') 
    <a href="{{ URL::previous() }}" class="py-1 px-2 bg-orange-300 text-gray-100 rounded-xl hover:bg-orange-400 mr-2">
        <i class="fas fa-arrow-left"></i>
    </a>  
    Client : {{ $client->client_name }}
@endsection

@section('content')

    <div class="card xl:w-3/4 xl:mx-auto">
        <div class="max-w-full overflow-auto">
            <?php
                $images = [
                    'http://midone-vue.left4code.com/img/profile-14.04e928f6.jpg',
                    'http://midone-vue.left4code.com/img/profile-11.b5ab9aac.jpg',
                    'http://midone-vue.left4code.com/img/profile-6.29f8ba97.jpg',
                    'http://midone-vue.left4code.com/img/profile-13.d46ecb73.jpg',
                    'http://midone-vue.left4code.com/img/profile-8.550b132f.jpg'
                ];
            ?>
            @foreach ($images as $k=>$image)
                <div class="card shadow-md relative inline-block p-1 pt-3 w-32 h-40 @if($client->client_photo_profile == $image) bg-green-100 border-4 border-green-300  @endif">
                    <img class="object-cover mx-auto h-32" src="{{$image}}">
                    <div class="absolute dropdown top-0 left-0">
                        <button class="btn border-0 text-md p-1 -m-1 -mt-4 bg-pink-500 text-white"><i class="fas fa-ellipsis-h"></i></button>
                        <div class="dropdown-content hidden left-0 mt-2 bg-pink-600 text-white shadow rounded overflow-hidden">
                            <ul>
                                <li class="px-2 py-1 hover:bg-pink-400 border-b text-xs cursor-pointer"><i class="fas fa-times"></i> Supprimer</li>
                                <li class="px-2 py-1 hover:bg-pink-400 border-b text-xs cursor-pointer"><i class="fas fa-check"></i> Par Defaut</li>
                            </ul>
                        </div>
                    </div>
                </div>                
            @endforeach            
        </div>

    </div>

    <div class="xl:w-3/4 xl:mx-auto">
        <div class="flex gap-4">
            <!-- Informations Client -->
            <div class="card m-0 flex-1">
                <h1 class="text-lg font-bold text-gray-600 mb-2">{{ __('Les informations Client') }}</h1>
                <div class="-mx-4 border-t border-gray-200 mb-6"></div>

                <div class="flex gap-3 mb-3">
                    <div class="flex-1">
                        <label class="block">
                            <span class="text-gray-700">Nom Client *</span>
                            <input value="{{ $client->client_name }}" type="text" id="client_name" name="client_name" class="form-input mt-1 block w-full" placeholder="Nom Client">
                        </label>
                    </div>
        
                    <div class="flex-1">
                        <label class="block">
                            <span class="text-gray-700">Téléphone</span>
                            <input value="{{ $client->client_telephone }}" type="text" id="client_telephone" name="client_telephone" class="form-input mt-1 block w-full" placeholder="Téléphone">
                        </label>
                    </div>
                </div>

                <div class="flex gap-3 mb-3">
                    <div class="flex-1">
                        <label class="block">
                            <span class="text-gray-700">Ville *</span>
                            <input value="{{ $client->client_city }}" type="text" id="client_city" name="client_city" class="form-input mt-1 block w-full" placeholder="Ville Client">
                        </label>
                    </div>
                </div>

                <div class="flex gap-3 mb-3">
                    <div class="flex-1">
                        <label class="block">
                            <span class="text-gray-700">Adresse *</span>
                            <input value="{{ $client->client_adresse }}" type="text" id="client_adresse" name="client_adresse" class="form-input mt-1 block w-full" placeholder="Adresse Client">
                        </label>
                    </div>
                </div>
            </div>   
            
            <div class="card m-0 w-64">
                <label class="block mb-4">
                    <span class="text-gray-700">Status</span>
                    <select name="client_status_id" id="client_status_id" class="form-select mt-1 block w-full">
                        @foreach ($client_statuses as $status)
                            <option @if ($client->status->id == $status->id) selected @endif value="{{ $status->id }}">{{ $status->client_status }}</option> 
                        @endforeach
                    </select>
                </label>

                <label class="block mb-4">
                    <span class="text-gray-700">Category</span>
                    <select name="client_category_id" id="client_category_id" class="form-select mt-1 block w-full">
                        @foreach ($client_categories as $category)
                            <option @if ($client->category->id == $category->id) selected @endif value="{{ $category->id }}">{{ $category->client_category }}</option> 
                        @endforeach
                    </select>
                </label>

                <label class="block">
                    <span class="text-gray-700">Type</span>
                    <select name="client_type_id" id="client_type_id" class="form-select mt-1 block w-full">
                        @foreach ($client_types as $type)
                            <option @if ($client->type->id == $type->id) selected @endif value="{{ $type->id }}">{{ $type->client_type }}</option> 
                        @endforeach
                    </select>
                </label>
            </div> 

        </div>



        
    </div>


@endsection