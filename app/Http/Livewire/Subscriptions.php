<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CouponModel;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Subscriptions extends Component
{
    protected $Subscriptions;

    public $isActive = 0;
    public $activatedBundle;
    public $expirationDate;
    public $expirationPercentage;

    public $bundles;
    public $bundlesFeatures;

    public $coupon;
    public $discounts = 1;

    // public function couponApply()
    // {
    //     $this->coupon = CouponModel::where('name', '=', $this->couponCode)->first();
    //     $this->discounts = $this->coupon->discount;
    //     // dd($this->discounts);
    // }

    public function render()
    {
        // Expiration percentage
        $this->Subscriptions = DB::table('subscriptions')
            ->join('bundles', 'bundles.id', '=', 'subscriptions.bundles_id')
            ->where('users_id','=', 1)
            ->orderBy('expiration_date', 'desc')
            ->first();

        if($this->Subscriptions->expiration_date > Carbon::now()->toDateTimeString())
        {
            $this->isActive = 1;
            $this->activatedBundle = $this->Subscriptions->bundles_id;
        }

        $this->expirationDate = $this->Subscriptions->expiration_date;
        $this->expirationPercentage = 100 - Carbon::parse($this->Subscriptions->expiration_date)->diff(Carbon::now()->toDateTimeString())->days * 100 / $this->Subscriptions->duration;

        // Coupon
        if(Auth::user()->coupon_id != null)
        {
            $this->coupon = CouponModel::find(Auth::user()->coupon_id)->where('expiration_date' , '>=' , Carbon::now())->first();
            if($this->coupon != null)
            {
                $this->discounts = $this->coupon->discount;
            }
            else
            {
                $this->discounts = 1;
            }
        }

        // Bundles
        $this->bundles = DB::table('bundles')
            ->orderBy('price')
            ->get();

        $this->bundlesFeatures = collect();
        for ($i=0; $i < count($this->bundles); $i++) { 
            $this->bundlesFeatures->prepend(explode("-", $this->bundles[$i]->features));
            $this->bundles[$i]->price = round($this->bundles[$i]->price * $this->discounts , 0);
        }

        // DD($this->bundles);
        
        return view('livewire.subscriptions');
    }

    
}
