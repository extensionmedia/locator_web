@extends('layouts.locator')
@section('title') {{ __('Mouvements des comptes') }} @endsection
@section('page_title') {{ __('Mouvements des comptes') }}   @endsection
@section('content')
    <div class="py-4 flex items-center justify-between pr-2">
        <div class="flex gap-3">
            <div class="relative">
               <input type="text" class="border rounded focus:outline-none focus:bg-yellow-50 px-3 py-2 pr-6"> 
               <span class="absolute top-0 right-0 m-2 mt-3 text-gray-400"><i class="fas fa-search"></i></span>
            </div>
            

            <div class="py-2 px-3 rounded-lg border cursor-pointer hover:border-gray-500 bg-white ">
                <span class="text-gray-400 text-xs">Trier par:</span> 
                <select name="" id="" class="bg-transparent">
                    <option value="ville">Ville</option>
                    <option value="marque">Homme / Femme</option>
                    <option value="nom">Nom</option>
                    <option value="ca">C.A.</option>
                    <option value="status">Status</option>
                </select>
            </div>

            <div class="py-2 px-3 rounded-lg border cursor-pointer hover:border-gray-500 bg-white ">
                <span class="text-gray-400 text-xs">Filtrer</span> 
                <span class="px-2"> <i class="fas fa-sliders-h"></i> </span>
            </div>
            
        </div>

        <div class="">
            <a href="{{ route('mouvement.create') }}" class="btn btn-primary"> <i class="fas fa-plus"></i> Ajouter </a>
        </div>

    </div>

    <div class="shadow ajax">
        <table class="w-full bg-white text-xs">
            <thead>
                <tr class="bg-gray-200 py-2 text-xs font-normal uppercase">
                    <th class="py-3 w-20">Date</th>
                    <th class="py-3 text-left">Déscription</th>
                    <th class="py-3 text-left">Catégorie</th>
                    <th class="py-3 text-left">Type</th>
                    <th class="py-3 text-left">Compte</th>
                    <th class="py-3 text-right pr-2">Montant</th>
                    <th class="py-3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mouvements as $mouvement)
                    @include('finance.mouvement.includes.ligne')
                @endforeach
            </tbody>
        </table>

    </div>
    <div class="py-3 text-center max-w-full overflow-auto">
        <ul class="items-center">
            @if($mouvements->onFirstPage())
                <li class="inline-block rounded border bg-gray-100"><i class="fas fa-angle-left"></i></li>
            @else
                <li class="inline-block">
                    <a class="inline-block rounded border bg-gray-200 hover:bg-gray-200" href="{{ $mouvements->previousPageUrl() }}"><i class="fas fa-angle-left"></i></a>
                </li>
            @endif
            @foreach ($mouvements->getUrlRange(1,$mouvements->lastPage()) as $page=>$url)
                @if ( $page == $mouvements->currentPage() )
                    <li class="inline-block rounded border bg-gray-100">{{$page}}</li>
                @else
                    <li class="inline-block">
                        <a class="inline-block rounded border bg-gray-100 hover:bg-gray-200" href="{{ $url }}">{{$page}}</a>
                    </li>                
                @endif
            @endforeach

            
            
            @if($mouvements->hasMorePages())
                
                <li class="inline-block">
                    <a class="inline-block rounded border bg-gray-100 hover:bg-gray-200" href="{{ $mouvements->nextPageUrl() }}"><i class="fas fa-angle-right"></i></a>
                </li>
            @else
                <li class="inline-block rounded border bg-gray-500"><i class="fas fa-angle-right"></i></li>
            @endif

        </ul>
    </div>
    <script>
        $(document).ready(function(){
            $('.ajax').addClass('relative').append(`
                <div class="absolute top-0 left-0 right-0 h-full text-center pt-12" style="background-color:rgba(255,255,100,.3)">
                    <div class="w-32 mx-auto">
                        <img src="{{ url("storage/images/loader.gif") }}">
                    </div>
                </div>
            `);
        });
    </script>
@endsection