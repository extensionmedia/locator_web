<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Alerts extends Component{

    public $alerts;

    public function render(){

        $this->alerts = [
            [
                'created_at'        =>  '2020-11-20 15:42:13',
                'subject'           =>  'Vidange',
                'description'       =>  'Vidange de la voiture Dacia Logan 1452-A-40 programmé le 20/12/2020',
                'status'            =>  0
            ],
            [
                'created_at'        =>  '2020-11-24 15:42:13',
                'subject'           =>  'Assurance',
                'description'       =>  'Verifier assurance Renault Clio Gris',
                'status'            =>  0
            ]
        ];
        return view('livewire.alerts')->with(
            ['alerts'=>$this->alerts]
        );
    }
}
