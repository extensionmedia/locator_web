<?php

namespace App\Http\Controllers;

use App\Models\FinanceAccount;
use Illuminate\Http\Request;

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

        foreach(FinanceAccount::all() as $account){
            $json[$year][$account->finance_account_name]['in'] = $account->mouvements()
                                                                        ->whereYear('account_mouvement_date', $year)
                                                                        ->sum('account_mouvement_in');
        
            $json[$year-1][$account->finance_account_name]['in'] = $account->mouvements()
                                                                        ->whereYear('account_mouvement_date', $year-1)
                                                                        ->sum('account_mouvement_in');
        }
    }
}
