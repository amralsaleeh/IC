<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\TermsModel;

class AdminTermsList extends Component
{
    public function render()
    {
        $this->terms = TermsModel::get();

        return view('livewire.admin.admin-terms-list');
    }
}
