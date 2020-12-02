<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Cars;
class ShowCars extends Component{

    public $style = 'grid';
    public $list = '';

    public function render(){
        $cars = new Cars;
        $this->list = $cars->getCars();
        return view('livewire.show-cars');
    }


    public function grid(){
        $cars = new App\Cars;
        $this->list = $cars->getCars();
    }

}
