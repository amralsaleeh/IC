<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CouponModel;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class Subscriptions extends Component
{
    public $subscriptions;
    protected $lastSubscription;

    public $isActive = 0;
    public $activatedBundle;
    public $expirationDate;
    public $expirationPercentage;

    public $bundles;
    public $bundlesFeatures;

    public $coupon;
    public $couponCode;
    public $couponExist;
    public $discounts = 1;

    public function render()
    {
        // All subscriptions history
        $this->subscriptions = DB::table('subscriptions')
            ->join('bundles', 'bundles.id', '=', 'subscriptions.bundles_id')
            ->where('users_id','=', Auth::user()->id)
            ->orderBy('expiration_date', 'desc')
            ->get();

        // Expiration percentage
        $this->lastSubscription = DB::table('subscriptions')
            ->join('bundles', 'bundles.id', '=', 'subscriptions.bundles_id')
            ->where('users_id','=', Auth::user()->id)
            ->orderBy('expiration_date', 'desc')
            ->first();

        if($this->lastSubscription->expiration_date > Carbon::now()->toDateTimeString())
        {
            $this->isActive = 1;
            $this->activatedBundle = $this->lastSubscription->bundles_id;
        }

        $this->expirationDate = $this->lastSubscription->expiration_date;
        $this->expirationPercentage = 100 - Carbon::parse($this->lastSubscription->expiration_date)->diff(Carbon::now()->toDateTimeString())->days * 100 / ($this->lastSubscription->duration * 30);

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
        
        return view('livewire.subscriptions');
    }

    // Show Add Coupon Modal
    public function showAddCouponModal()
    {
        $this->couponCode = null;
        $this->dispatchBrowserEvent('show_add_coupon_modal');
    }

    // Add Coupon
    public function addCoupon()
    {
        $this->couponCode = CouponModel::where('name', '=', $this->couponCode)->where('expiration_date' , '>=' , Carbon::now())->first();
        
        if($this->couponCode != null)
        {
            $this->couponExist = true;
            DB::table('users')
                ->where('id', '=', Auth::user()->id)
                ->update(['coupon_id' => $this->couponCode->id]);

                $this->dispatchBrowserEvent('hide_add_coupon_modal', ['message' => 'تم إضافة الكوبون بنجاح']);

                redirect(request()->header('Referer'));
        }
        else
        {
            $this->couponExist = false;
        }
    }

    public function getCouponDiscounts($id)
    {
        $coupon = CouponModel::find($id);

        if($coupon != null)
        {
            return CouponModel::find($id)->discount * 100 . '%';
        }
        else
        {
            return '-';
        }
        
        // dd(CouponModel::find($id));
    }

    
}
