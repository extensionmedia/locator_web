<?php

namespace App\Http\Controllers;

use App\Models\FinanceAccount;
use App\Models\FinanceAccountMouvement;
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
                        DB::raw('sum(account_mouvement_in) as sums_in'), 
                        DB::raw("DATE_FORMAT(account_mouvement_date,'%m') as monthKey")
                    )
                    ->whereYear('account_mouvement_date', $year)
                    ->groupBy('monthKey')
                    ->orderBy('monthKey', 'ASC')
                    ->get();

        $json = [0,0,0,0,0,0,0,0,0,0,0,0];

        foreach($orders as $order){
            $json[$order->monthKey-1] = $order->sums_in;
        }
        return json_encode($json);
    }
}
