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
            $table->integer('users_id')->index('FKsubscripti835867');
            $table->integer('bundles_id')->index('FKsubscripti121099');
            $table->integer('coupons_id')->nullable()->index('FKsubscripti176504');
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
