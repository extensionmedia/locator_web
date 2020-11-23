<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public static function listSchedules(){
        $data = [
            [
                'due_date'      =>  '2020-11-07',
                'description'   =>  'Vidange Renault Clio'
            ],
            [
                'due_date'      =>  '2020-11-01',
                'description'   =>  'Location Dacia'
            ],
            [
                'due_date'      =>  '2020-11-22',
                'description'   =>  'Fin de Location Dacia'
            ],[
                'due_date'      =>  '2020-11-17',
                'description'   =>  'Vidange Renault Clio'
            ],
            [
                'due_date'      =>  '2020-11-11',
                'description'   =>  'Location Dacia'
            ],
            [
                'due_date'      =>  '2020-11-30',
                'description'   =>  'Fin de Location Dacia'
            ]
        ];
        return $data;
    }
}
