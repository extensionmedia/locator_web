<?php

namespace App\Http\Controllers;

use App\Models\FinanceAccount;
use App\Models\FinanceAccountMouvement;
use App\Models\FinanceAccountMouvementCategory;
use App\Models\PaymentType;
use Illuminate\Http\Request;
use DB;

class FinanceAccountMouvementController extends Controller
{
    public function totalByYear($year=0){
        $year = $year==0? date('Y'): $year;
        $json = [];
        foreach(FinanceAccount::all() as $account){
            $json[$account->finance_account_name]['in'] = $account->mouvements()
                                                                        ->whereYear('account_mouvement_date', $year)
                                                                        ->sum('account_mouvement_in');

            $json[$account->finance_account_name]['out'] = $account->mouvements()
                                                                        ->whereYear('account_mouvement_date', $year)
                                                                        ->sum('account_mouvement_out');
        }
        return json_encode($json);
    }

    public function totalByYearAndMonth($year = 0){
        $year = $year==0? date('Y'): $year;
        $json = [];  
        $orders = FinanceAccountMouvement::select(
                        DB::raw('sum(account_mouvement_out+account_mouvement_in) as sums_in'), 
                        DB::raw("DATE_FORMAT(account_mouvement_date,'%m') as monthKey"),
                        DB::raw("DATE_FORMAT(account_mouvement_date,'%Y') as yearKey")
                    )
                    ->whereYear('account_mouvement_date', '>=', $year-1)
                    ->whereYear('account_mouvement_date', '<=', $year)
                    ->groupBy('monthKey')
                    ->groupBy('yearKey')
                    ->orderBy('monthKey', 'ASC')
                    ->get();

        $json = [
                    ($year-1)   =>  [0,0,0,0,0,0,0,0,0,0,0,0],
                    $year       =>  [0,0,0,0,0,0,0,0,0,0,0,0]
                ];

        foreach($orders as $order){
            $json[$order->yearKey][$order->monthKey-1] = $order->sums_in;
        }
        return json_encode($json);
    }

    public function depense_index(){
        return view('depense.index')->with([
            'depenses'  =>  FinanceAccountMouvement::where('account_mouvement_out', '>', 0)->orderBy('account_mouvement_date', 'desc')->paginate(20)
        ]);
    }

    public function depense_create(){
        return view('depense.create')->with([
            'categories'  =>  FinanceAccountMouvementCategory::where('is_in', 0)->get(),
            'accounts'  =>  FinanceAccount::where('finance_account_is_active', 1)->get(),
            'types'  =>  PaymentType::orderBy('payment_type')->get()
        ]);
    }

    public function depense_edit(FinanceAccountMouvement $depense){
        return view('depense.edit')->with([
            'depense'   =>  $depense,
            'categories'  =>  FinanceAccountMouvementCategory::where('is_in', 0)->get(),
            'accounts'  =>  FinanceAccount::where('finance_account_is_active', 1)->get(),
            'types'  =>  PaymentType::orderBy('payment_type')->get()
        ]);
    }

    public function depense_update(Request $request){
        dd($request);
    }

    public function index(){
        return view('finance.mouvement.index')->with([
            'mouvements'    =>  FinanceAccountMouvement::orderBy('account_mouvement_date', 'desc')->paginate(20)
        ]);
    }

    public function create(){
        return view('finance.mouvement.create')->with([

        ]);
    }

    public function ajax(Request $req){
        $html = '';
        foreach(FinanceAccountMouvement::where('description', 'like', "%{$req->input('req')}%")->orderBy('account_mouvement_date', 'desc')->get() as $mouvement){
            $html .= view('finance.mouvement.includes.ligne')->with([
                'mouvement' =>  $mouvement
            ]);            
        }
        return $html;
    }
}
