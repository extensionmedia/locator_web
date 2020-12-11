<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Car;
class ShowCars extends Component{

    public $style = 'list';
    public $cars = [];

    public function render(){
        $this->cars = Car::all();
        return view('livewire.show-cars');
    }


    public function change($style='grid'){
        $this->style = $style;
    }

}
