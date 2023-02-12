<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\GuidesModel;

class Guide extends Component
{
    public $guides;

    public function render()
    {
        $this->guides = GuidesModel::get();

        return view('livewire.guide');
    }
}
