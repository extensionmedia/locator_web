<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Str;


class ClientController extends Controller
{
    public function index(){
        return view('client.index', ['clients'=> Client::orderBy('client_name', 'asc')->paginate(20) ]);
    }

}
