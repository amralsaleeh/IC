<?php

namespace App\Http\Livewire\Admin;

use App\Models\CouponModel;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AdminSubscriptionsList extends Component
{
    public $couponInfo=[];

    // Render
    public function render()
    {
        return view('livewire.admin.admin-subscriptions-list');
    }

    // Show New Coupon Modal
    public function showNewCouponModal()
    {
        $this->couponInfo = [];
        $this->dispatchBrowserEvent('show_new_coupon_modal');
    }

    // Add New Coupon
    public function addNewCoupon()
    {
        $validatedData =  Validator::make($this->couponInfo, [
            'name' => 'required',
            'discount' => 'required',
            'expiration_date' => 'required',
        ])-> validate();

        CouponModel::create($validatedData);

        $this->dispatchBrowserEvent('hide_new_coupon_modal', ['message' => 'تم إضافة الكوبون بنجاح']);
    }
}
