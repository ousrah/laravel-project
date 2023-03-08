<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class HelloWorld extends ModalComponent
{
public $user;
public function mount($user)
{
   $this->id=$user;
}


    public function render()
    {
        return view('livewire.hello-world');
    }
}
