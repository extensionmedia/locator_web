@extends('layouts.locator')
@section('title') {{ __('Depenses') }} @endsection
@section('page_title') {{ __('Dépenses / Charges') }}   @endsection
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
            <a href="{{ route('depense.create') }}" class="btn btn-primary"> <i class="fas fa-plus"></i> Ajouter </a>
        </div>

    </div>

    <div class="shadow">
        <table class="w-full bg-white text-xs">
            <thead>
                <tr class="bg-gray-200 py-2 text-xs font-normal uppercase">
                    <th class="py-3 w-20">Date</th>
                    <th class="py-3 text-left">Déscription</th>
                    <th class="py-3 text-left">Catégorie</th>
                    <th class="py-3 text-left">Type</th>
                    <th class="py-3 text-left">Compte</th>
                    <th class="py-3 text-right pr-2 bg-red-100 text-red-600">Montant</th>
                    <th class="py-3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($depenses as $depense)
                    <tr class="border-b hover:bg-gray-100" style="transition: all .3s">
                        <td class="py-1" style="min-width: 60px">
                            {{ $depense->account_mouvement_date }}
                        </td>
                        <td>
                            {{ $depense->description }} 
                        </td>
                        <td class="w-28">
                            {{ $depense->category->finance_account_mouvement_category }} 
                        </td>
                        <td class="w-28 text-left">
                            {{ $depense->type->payment_type }} 
                        </td>
                        <td class="w-28 text-left">
                            {{ $depense->account->finance_account_name }} 
                        </td>
                        <td class="w-24 text-right text-xs bg-red-100 text-red-600 pr-2"> 
                            @money($depense->account_mouvement_out) 
                        </td>
                        <td class="w-14 text-center">
                            <form class="m-0" method="POST" action="{{ route('depense.edit', ['depense'=>$depense->id]) }}">
                                @csrf()
                                <button type="submit" class="btn"><i class="fas fa-ellipsis-h"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <div class="py-3 text-center max-w-full overflow-auto">
        <ul class="items-center">
            @if($depenses->onFirstPage())
                <li class="inline-block rounded border bg-gray-100"><i class="fas fa-angle-left"></i></li>
            @else
                <li class="inline-block">
                    <a class="inline-block rounded border bg-gray-200 hover:bg-gray-200" href="{{ $depenses->previousPageUrl() }}"><i class="fas fa-angle-left"></i></a>
                </li>
            @endif
            @foreach ($depenses->getUrlRange(1,$depenses->lastPage()) as $page=>$url)
                @if ( $page == $depenses->currentPage() )
                    <li class="inline-block rounded border bg-gray-100">{{$page}}</li>
                @else
                    <li class="inline-block">
                        <a class="inline-block rounded border bg-gray-100 hover:bg-gray-200" href="{{ $url }}">{{$page}}</a>
                    </li>                
                @endif
            @endforeach

            
            
            @if($depenses->hasMorePages())
                
                <li class="inline-block">
                    <a class="inline-block rounded border bg-gray-100 hover:bg-gray-200" href="{{ $depenses->nextPageUrl() }}"><i class="fas fa-angle-right"></i></a>
                </li>
            @else
                <li class="inline-block rounded border bg-gray-500"><i class="fas fa-angle-right"></i></li>
            @endif

        </ul>
    </div>
@endsection