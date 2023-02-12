<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Subscriptions extends Component
{
    public $isActive;
    public $expirationDate;

    public function render()
    {
        return view('livewire.subscriptions');
    }
}
