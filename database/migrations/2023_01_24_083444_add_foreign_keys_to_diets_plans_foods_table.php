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
        Schema::table('diets_plans-foods', function (Blueprint $table) {
            $table->foreign(['diets_plans_id'], 'diets_plans_id_diets_plans-foods_FK')->references(['id'])->on('diets_plans');
            $table->foreign(['foods_id'], 'foods_id_diets_plans-foods_FK')->references(['id'])->on('foods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('diets_plans-foods', function (Blueprint $table) {
            $table->dropForeign('diets_plans_id_diets_plans-foods_FK');
            $table->dropForeign('foods_id_diets_plans-foods_FK');
        });
    }
};
