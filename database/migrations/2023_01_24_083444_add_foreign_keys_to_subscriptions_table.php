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
        Schema::table('subscriptions', function (Blueprint $table) {
            $table->foreign(['bundles_id'], 'bundles_id_subscriptions_FK')->references(['id'])->on('bundles');
            $table->foreign(['users_id'], 'users_id_subscriptions_FK')->references(['id'])->on('users');
            $table->foreign(['coupons_id'], 'coupons_id_subscriptions_FK')->references(['id'])->on('coupons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subscriptions', function (Blueprint $table) {
            $table->dropForeign('bundles_id_subscriptions_FK');
            $table->dropForeign('users_id_subscriptions_FK');
            $table->dropForeign('coupons_id_subscriptions_FK');
        });
    }
};
