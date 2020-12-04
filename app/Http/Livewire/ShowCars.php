<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cars;
class ShowCars extends Component{

    public $style = 'grid';
    public $cars = [];

    public function render(){
        $cars = new Cars;
        $this->cars = $cars->getCars();
        return view('livewire.show-cars');
    }


    public function change($style='grid'){
        $this->style = $style;
    }

}
