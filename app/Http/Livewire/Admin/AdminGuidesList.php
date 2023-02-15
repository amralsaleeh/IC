<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\GuidesModel;

class AdminGuidesList extends Component
{
    public function render()
    {
        $this->guides = GuidesModel::get();

        return view('livewire.admin.admin-guides-list');
    }
}
