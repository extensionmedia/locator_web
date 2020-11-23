<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $cars = [
            [
                'https://th.bing.com/th/id/OIP.plcGSxzm_GIlwgQCRK6hMAHaE8?w=219&h=180&c=7&o=5&pid=1.7',
                'Dacia Logan',
                '123456-44-A',
                '#ffffff',
                '#000000'
            ],
            [
                'https://th.bing.com/th/id/OIP.biMC08iyLIchH85TKhtsaQHaEK?w=327&h=184&c=7&o=5&pid=1.7',
                'Peugeot 3008',
                '11485-1-A',
                'red',
                '#ffffff'
            ],
            [
                'https://th.bing.com/th/id/OIP.-wz7Z8b3GtllhGL6qoaUhAHaEu?w=245&h=180&c=7&o=5&pid=1.7',
                'Dacia Duster',
                '1289-40-A',
                'jeune',
                '#ffffff'
            ],
            [
                'https://th.bing.com/th/id/OIP.wiGLjnZOQxFr2eV4I0-mXAHaEd?w=310&h=186&c=7&o=5&pid=1.7',
                'Dacia Duster',
                '1289-40-A',
                'blue',
                '#ffffff'
            ]
        ];

        $activities = UserController::usersActivities();
        $schedules = ScheduleController::listSchedules();
        $days = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];
        return view('dashboard')
                ->with(
                    [
                        'cars'          =>  $cars, 
                        'days'          =>  $days, 
                        'activities'    =>  $activities,
                        'schedules'     =>  $schedules
                    ]);
    }
}
