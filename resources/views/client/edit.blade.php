@extends('layouts.locator')

@section('title') Client : {{ $client->client_name }} @endsection
@section('page_title') 
    <a href="{{ URL::previous() }}" class="py-1 px-2 bg-orange-300 text-gray-100 rounded-xl hover:bg-orange-400 mr-2">
        <i class="fas fa-arrow-left"></i>
    </a>  
    Client : {{ $client->client_name }}
@endsection

@section('content')
    <div class="w-1/2">
        <div class="card xl:w-3/4 xl:mx-auto">
            <div class="w-full overflow-auto flex">
                @for ($i = 0; $i < 10; $i++)
                    <div class="card relative p-1 w-24">
                        <button class="btn btn-primary text-xs absolute top-0 right-0 p-1 -m-1"><i class="fas fa-times"></i></button>
                        <img class="object-cover w-24 h-24 mx-auto" src="http://midone-vue.left4code.com/img/profile-14.04e928f6.jpg">
                    </div>                
                @endfor            
            </div>

        </div>

        <!-- Informations Client -->
        <div class="card xl:w-3/4 xl:mx-auto">
            <h1 class="text-lg font-bold text-gray-600 mb-2">{{ __('Les informations Client') }}</h1>
            <div class="-mx-4 border-t border-gray-200 mb-6"></div>
        </div>
    </div>


@endsection