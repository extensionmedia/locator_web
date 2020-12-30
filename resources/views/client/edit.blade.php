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
            @for ($i = 0; $i < 7; $i++)
                <div class="card relative inline-block p-1 pt-3 w-32 h-32">
                    <img class="object-cover mx-auto" src="http://midone-vue.left4code.com/img/profile-14.04e928f6.jpg">
                    <div class="absolute dropdown top-0 left-0">
                        <button class="btn border-0 text-xs p-1 -m-1 -mt-3"><i class="fas fa-ellipsis-h"></i></button>
                        <div class="dropdown-content hidden left-0 mt-2 bg-pink-600 text-white shadow rounded overflow-hidden">
                            <ul>
                                <li class="px-2 py-1 hover:bg-pink-400 border-b text-xs cursor-pointer"><i class="fas fa-times"></i> Supprimer</li>
                                <li class="px-2 py-1 hover:bg-pink-400 border-b text-xs cursor-pointer"><i class="far fa-edit"></i> Renomer</li>
                                <li class="px-2 py-1 hover:bg-pink-400 border-b text-xs cursor-pointer"><i class="fas fa-check"></i> Par Defaut</li>
                            </ul>
                        </div>
                    </div>
                </div>                
            @endfor            
        </div>

    </div>

    <!-- Informations Client -->
    <div class="card xl:w-3/4 xl:mx-auto">
        <h1 class="text-lg font-bold text-gray-600 mb-2">{{ __('Les informations Client') }}</h1>
        <div class="-mx-4 border-t border-gray-200 mb-6"></div>

        {{ $client->category->client_category }}
    </div>


@endsection