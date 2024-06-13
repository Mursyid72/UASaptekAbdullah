<?php

namespace App\Livewire\Create;

use Livewire\Component;

class Page extends Component
{
    public $title;
    public $short;
    public $long ;
    public function render()
    {
        return view('livewire.create.page');
    }

    public function  save(){
        dd($this->title, $this->short, $this->long ); 
    }    
}
