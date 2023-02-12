<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TermsModel;

class Terms extends Component
{
    public $terms;

    public function render()
    {
        $this->terms = TermsModel::get();

        return view('livewire.terms');
    }
}
