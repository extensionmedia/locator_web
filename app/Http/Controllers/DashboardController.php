<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\CarRent;
use App\Models\FinanceAccountMouvement;
use App\Models\Client;

class DashboardController extends Controller
{
    public function index(){

        $activities = UserController::usersActivities();
        $schedules = ScheduleController::listSchedules();

        $rents = CarRentController::get_by_year_month();

        $days = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
        return view('dashboard')
                ->with(
                    [
                        'cars'          =>  Car::all(), 
                        'days'          =>  $days, 
                        'activities'    =>  $activities,
                        'schedules'     =>  $schedules,
                        'numbers'       =>  $this->numbers(),
                        'rents'         =>  $rents
                    ]);
    }

    public function numbers($month = 0, $year = 0){
        return [
            'totalRents'        =>  FinanceAccountMouvement::where('account_mouvement_in', '>', 0)
                                                                ->whereYear('account_mouvement_date', '2020')
                                                                ->sum('account_mouvement_in'),
            'totalDepenses'     =>  FinanceAccountMouvement::where('account_mouvement_out', '>', 0)
                                                                ->whereYear('account_mouvement_date', '2020')
                                                                ->sum('account_mouvement_out'),
            'countRents'        =>  CarRent::whereYear('car_rent_start_date', '2019')->count(),
            'countClients'      =>  Client::count()
        ];
    }
}
