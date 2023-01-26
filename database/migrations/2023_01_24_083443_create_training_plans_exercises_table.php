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
        Schema::create('training_plans-exercises', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->integer('exercises_id')->index('FKtraining_p45402');
            $table->integer('training_plans_id')->index('FKtraining_p468151');
            $table->integer('day');
            $table->integer('sets');
            $table->string('reps');
            $table->string('tempo');
            $table->boolean('is_series')->default(false);
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
        Schema::dropIfExists('training_plans-exercises');
    }
};
