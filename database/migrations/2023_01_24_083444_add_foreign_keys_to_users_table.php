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
        Schema::table('users', function (Blueprint $table) {
            $table->foreign(['residence_country'], 'residence_country_users_FK')->references(['id'])->on('countries');
            $table->foreign(['homeland_country'], 'homeland_country_users_FK')->references(['id'])->on('countries');
            $table->foreign(['diets_plans_id'], 'diets_plans_id_users_FK')->references(['id'])->on('diets_plans');
            $table->foreign(['training_plans_id'], 'training_plans_id_users_FK')->references(['id'])->on('training_plans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('residence_country_users_FK');
            $table->dropForeign('homeland_country_users_FK');
            $table->dropForeign('diets_plans_id_users_FK');
            $table->dropForeign('training_plans_id_users_FK');
        });
    }
};
