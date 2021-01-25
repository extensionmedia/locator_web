<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\ClientStatus;
use App\Models\ClientCategory;
use App\Models\ClientType;
use Illuminate\Support\Str;


class ClientController extends Controller
{
    public function index(){
        return view('client.index', ['clients'=> Client::orderBy('client_name', 'asc')->paginate(20) ]);
    }

    public function edit(Client $client){
        return view('client.edit')->with([
            'client'=>$client, 
            'client_statuses' => ClientStatus::all(),
            'client_categories' => ClientCategory::all(),
            'client_types' => ClientType::all(),
            ]);
    }

    public function create(){
        return view('client.create')->with([ 
            'client_statuses' => ClientStatus::all(),
            'client_categories' => ClientCategory::all(),
            'client_types' => ClientType::all(),
            ]);
    }

    public function store(Request $client){
        $validated = $client->validate([
            'client_name'                   => 'required|max:255',
            'client_telephone_1'            => 'required|max:255',
            'client_permis_date_expiration' => 'required|date_format:Y-m-d',
        ]);
        return view('client.index', ['clients'=> Client::orderBy('created_at', 'asc')->paginate(20) ]);
    }
}
