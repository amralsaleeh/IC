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
        Schema::create('diets_plans-foods', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->integer('diets_plans_id')->index('diets_plans_id_diets_plans-foods_FK');
            $table->integer('foods_id')->index('foods_id_diets_plans-foods_FK');
            $table->string('meal');
            $table->integer('quantity');
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
        Schema::dropIfExists('diets_plans-foods');
    }
};
