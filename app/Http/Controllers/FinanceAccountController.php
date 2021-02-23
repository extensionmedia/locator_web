<?php

namespace App\Http\Controllers;

use App\Models\FinanceAccount;
use Illuminate\Http\Request;

class FinanceAccountController extends Controller
{
    public function index(){
        return view('finance.index')->with([
            'accounts'  =>  FinanceAccount::all()
        ]);
    }
}
