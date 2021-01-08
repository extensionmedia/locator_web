@extends('layouts.locator')

@section('title') Vehicule : {{ $car->car_matricule }} @endsection
@section('page_title') 
    <a href="{{ URL::previous() }}" class="py-1 px-2 bg-orange-300 text-gray-100 rounded-xl hover:bg-orange-400 mr-2">
        <i class="fas fa-arrow-left"></i>
    </a>  
    Vehicule : {{ $car->car_matricule }}
@endsection

@section('content')
    <div class="flex justify-between items-center p-3">
        <div class="flex gap-3">
            <button class="btn"><i class="fas fa-hourglass-half"></i> Locations</button>     
            <button class="btn"><i class="far fa-file-alt"></i> Paiements</button>  
            <button class="btn"><i class="fas fa-cash-register"></i> Depenses</button>       
        </div>
        <div class="flex gap-3">
            <button class="btn"><i class="far fa-copy"></i> Dupliquer</button> 
            <button class="btn btn-primary"><i class="far fa-save"></i> Enregistrer</button>
        </div>
    </div>
    <div class="card xl:w-3/4 xl:mx-auto relative">
        <div class="max-w-full overflow-auto">
            <?php
                $images = [
                    'https://th.bing.com/th/id/OIP.plcGSxzm_GIlwgQCRK6hMAHaE8?w=219&h=180&c=7&o=5&pid=1.7',
                    'https://th.bing.com/th/id/OIP.biMC08iyLIchH85TKhtsaQHaEK?w=327&h=184&c=7&o=5&pid=1.7',
                    'https://th.bing.com/th/id/OIP.-wz7Z8b3GtllhGL6qoaUhAHaEu?w=245&h=180&c=7&o=5&pid=1.7',
                    'https://th.bing.com/th/id/OIP.wiGLjnZOQxFr2eV4I0-mXAHaEd?w=310&h=186&c=7&o=5&pid=1.7',
                ];
            ?>
            @foreach ($images as $k=>$image)
                <div class="card shadow-md relative inline-block p-1 pt-3 w-32 h-40 @if($car->car_photo == $image) bg-green-100 border-4 border-green-300  @endif">
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
        <div class="absolute bottom-0 right-0 left-0 text-center pb-2">
            <button class="btn text-white bg-green-400 border-green-300"><i class="fas fa-cloud-upload-alt"></i> Upload</button>
        </div>
    </div>

    <div class="xl:w-3/4 xl:mx-auto">
        <div class="flex gap-4">
            <div class="flex-1">
                <!-- Informations Car -->
                <div class="card m-0 mb-4">
                    <h1 class="text-lg font-bold text-gray-600 mb-2">{{ __('Les informations Vehicule') }}</h1>
                    <div class="-mx-4 border-t border-gray-200 mb-6"></div>

                    <div class="flex gap-3 mb-3">
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Matricule</span>
                                <input value="{{ $car->car_matricule }}" type="text" id="car_matricule" name="car_matricule" class="form-input mt-1 block w-full" placeholder="Matricule">
                            </label>
                        </div>
            
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Matricule W</span>
                                <input value="{{ $car->car_matricule_w }}" type="text" id="car_matricule_w" name="car_matricule_w" class="form-input mt-1 block w-full" placeholder="Matricule W">
                            </label>
                        </div>
                    </div>
                    <div class="flex gap-3 mb-3">
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">N Chassis</span>
                                <input value="{{ $car->car_numero_chassis }}" type="text" id="car_numero_chassis" name="car_numero_chassis" class="form-input mt-1 block w-full" placeholder="N Chassis">
                            </label>
                        </div>
            
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">N GPS</span>
                                <input value="{{ $car->car_gps }}" type="text" id="car_gps" name="car_gps" class="form-input mt-1 block w-full" placeholder="+212661616161">
                            </label>
                        </div>
                    </div>
                    <div class="flex gap-3 mb-3">
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Date Mise En Route</span>
                                <input value="{{ Carbon\Carbon::parse($car->car_start_date)->format('Y-m-d') }}" type="date" id="car_start_date" name="car_start_date" class="form-input mt-1 block w-full">
                            </label>
                        </div>                        
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Prix Achat</span>
                                <input value="{{ $car->car_prix_achat }}" type="number" id="car_prix_achat" name="car_prix_achat" class="text-right font-bold form-input mt-1 block w-full" placeholder="0.00">
                            </label>
                        </div>
                    </div>
                    <div class="flex gap-3 mb-3">
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Kilometrage</span>
                                <input value="{{ $car->car_kilometrage }}" type="number" id="car_kilometrage" name="car_kilometrage" class="text-center font-bold form-input mt-1 block w-full" placeholder="0">
                            </label>
                        </div>
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Prix Vente</span>
                                <input value="{{ $car->car_prix_vente }}" type="number" id="car_prix_vente" name="car_prix_vente" class="text-right font-bold form-input mt-1 block w-full" placeholder="0.00">
                            </label>
                        </div>
                        
                    </div>
                </div>   
                
                <!-- Location Car -->
                <div class="card m-0">
                    <h1 class="text-lg font-bold text-gray-600 mb-2">{{ __('Location') }}</h1>
                    <div class="-mx-4 border-t border-gray-200 mb-6"></div>

                    <div class="flex gap-3 mb-3">
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Pr. Jr</span>
                                <input value="{{ $car->car_rent_price_day }}" type="text" id="car_rent_price_day" name="car_rent_price_day" class="text-right font-bold text-blue-600 form-input mt-1 block w-full" placeholder="0.00">
                            </label>
                        </div>
            
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Pr. 2Jr</span>
                                <input value="{{ $car->car_rent_price_2days }}" type="text" id="car_rent_price_2days" name="car_rent_price_2days" class="text-right font-bold text-blue-600 form-input mt-1 block w-full" placeholder="0.00">
                            </label>
                        </div>

                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Pr. 3Jr</span>
                                <input value="{{ $car->car_rent_price_3days }}" type="text" id="car_rent_price_3days" name="car_rent_price_3days" class="text-right font-bold text-blue-600 form-input mt-1 block w-full" placeholder="0.00">
                            </label>
                        </div>
            
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Pr. 4Jr</span>
                                <input value="{{ $car->car_rent_price_4days }}" type="text" id="car_rent_price_4days" name="car_rent_price_4days" class="text-right font-bold text-blue-600 form-input mt-1 block w-full" placeholder="0.00">
                            </label>
                        </div>
                    </div>

                    <div class="flex gap-3 mb-3">
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Pr. 5Jr</span>
                                <input value="{{ $car->car_rent_price_5days }}" type="text" id="car_rent_price_5days" name="car_rent_price_5days" class="text-right font-bold text-blue-600 form-input mt-1 block w-full" placeholder="0.00">
                            </label>
                        </div>
            
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Pr. 6Jr</span>
                                <input value="{{ $car->car_rent_price_6days }}" type="text" id="car_rent_price_6days" name="car_rent_price_6days" class="text-right font-bold text-blue-600 form-input mt-1 block w-full" placeholder="0.00">
                            </label>
                        </div>

                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Pr. Week</span>
                                <input value="{{ $car->car_rent_price_week }}" type="text" id="car_rent_price_week" name="car_rent_price_week" class="text-right font-bold text-blue-600 form-input mt-1 block w-full" placeholder="0.00">
                            </label>
                        </div>
            
                        <div class="flex-1">
                            <label class="block">
                                <span class="text-gray-700">Pr. Mois</span>
                                <input value="{{ $car->car_rent_price_month }}" type="text" id="car_rent_price_month" name="car_rent_price_month" class="text-right font-bold text-blue-600 form-input mt-1 block w-full" placeholder="0.00">
                            </label>
                        </div>
                    </div>
                </div>                
            </div>

                <!-- Status Client -->
            <div class="card m-0 w-64">
                <label class="block mb-4">
                    <span class="text-gray-700">Marque</span>
                    <select name="car_brand_id" id="car_brand_id" class="form-select mt-1 block w-full">
                        @foreach ($car_brands as $brand)
                            <option @if ($car->brand->id == $brand->id) selected @endif value="{{ $brand->id }}">{{ $brand->car_brand }}</option> 
                        @endforeach
                    </select>
                </label>
                <label class="block mb-4">
                    <span class="text-gray-700">Serie</span>
                    <select name="car_brand_serie_id" id="car_brand_serie_id" class="form-select mt-1 block w-full">
                        @foreach ($car_brand_series as $serie)
                            <option @if ($car->brandSerie->id == $serie->id) selected @endif value="{{ $serie->id }}">{{ $serie->car_brand_serie }}</option> 
                        @endforeach
                    </select>
                </label>
                <label class="block mb-4">
                    <span class="text-gray-700">Carburant</span>
                    <select name="car_carburant_id" id="car_carburant_id" class="form-select mt-1 block w-full">
                        @foreach ($car_carburants as $carburant)
                            <option @if ($car->carburant->id == $carburant->id) selected @endif value="{{ $carburant->id }}">{{ $carburant->car_carburant }}</option> 
                        @endforeach
                    </select>
                </label>
                <label class="block mb-4">
                    <span class="text-gray-700">Classe</span>
                    <select name="car_class_id" id="car_class_id" class="form-select mt-1 block w-full">
                        @foreach ($car_classes as $class)
                            <option @if ($car->class->id == $class->id) selected @endif value="{{ $class->id }}">{{ $class->car_class }}</option> 
                        @endforeach
                    </select>
                </label>
                <label class="block mb-4">
                    <span class="text-gray-700">Couleur</span>
                    <select name="car_color_id" id="car_color_id" class="form-select mt-1 block w-full">
                        @foreach ($car_colors as $color)
                            <option @if ($car->color->id == $color->id) selected @endif value="{{ $color->id }}" style="background-color:{{ $color->car_color_code }}">{{ $color->car_color }}</option> 
                        @endforeach
                    </select>
                </label>
                <label class="block mb-4">
                    <span class="text-gray-700">Boite à Vitesse</span>
                    <select name="car_gearbox_id" id="car_gearbox_id" class="form-select mt-1 block w-full">
                        @foreach ($car_gearboxes as $gearbox)
                            <option @if ($car->gearbox->id == $gearbox->id) selected @endif value="{{ $gearbox->id }}">{{ $gearbox->car_gearbox }}</option> 
                        @endforeach
                    </select>
                </label>
                <label class="block mb-4">
                    <span class="text-gray-700">Puissance Fiscale</span>
                    <select name="car_puissance_id" id="car_puissance_id" class="form-select mt-1 block w-full">
                        @foreach ($car_puissances as $puissance)
                            <option @if ($car->puissance->id == $puissance->id) selected @endif value="{{ $puissance->id }}">{{ $puissance->car_puissance }}</option> 
                        @endforeach
                    </select>
                </label>
            </div> 

        </div>



        
    </div>


@endsection