<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->integer('users_id')->index('users_id_subscriptions_FK');
            $table->integer('bundles_id')->index('bundles_id_subscriptions_FK');
            $table->integer('coupons_id')->nullable()->index('coupons_id_subscriptions_FK');
            $table->integer('payment');
            $table->timestamp('expiration_date');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
};
