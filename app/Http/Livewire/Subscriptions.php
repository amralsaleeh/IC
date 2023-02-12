<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Subscriptions extends Component
{
    protected $Subscriptions;

    public $isActive = 0;
    public $expirationDate;
    public $expirationPercentage;

    public function render()
    {
        $this->Subscriptions = DB::table('subscriptions')
            ->join('bundles', 'bundles.id', '=', 'subscriptions.bundles_id')
            ->where('users_id','=', 41)
            ->orderBy('expiration_date', 'desc')
            ->first();

        if($this->Subscriptions->expiration_date > Carbon::now()->toDateTimeString())
        {
            $this->isActive = 1;
        }

        $this->expirationDate = $this->Subscriptions->expiration_date;
        $this->expirationPercentage = 100 - Carbon::parse($this->Subscriptions->expiration_date)->diff(Carbon::now()->toDateTimeString())->days * 100 / $this->Subscriptions->duration;

        return view('livewire.subscriptions');
    }
}
