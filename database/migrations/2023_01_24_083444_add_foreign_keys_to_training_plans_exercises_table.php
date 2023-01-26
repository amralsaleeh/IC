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
        Schema::table('training_plans-exercises', function (Blueprint $table) {
            $table->foreign(['exercises_id'], 'exercises_id_training_plans-exercises_FK')->references(['id'])->on('exercises');
            $table->foreign(['training_plans_id'], 'training_plans_id_training_plans-exercises_FK')->references(['id'])->on('training_plans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('training_plans-exercises', function (Blueprint $table) {
            $table->dropForeign('exercises_id_training_plans-exercises_FK');
            $table->dropForeign('training_plans_id_training_plans-exercises_FK');
        });
    }
};
