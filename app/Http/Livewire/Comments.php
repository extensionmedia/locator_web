<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component{
    public $comments = [
        'First Comment'
    ];

    public function addComment(){
        array_push($this->comments, 'Comment Added lastely');
    }

    public function render(){
        return view('livewire.comments');
    }


}
