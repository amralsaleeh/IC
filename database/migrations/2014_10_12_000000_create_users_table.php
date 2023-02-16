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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('full_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->boolean('gender');
            $table->date('birth_date');
            $table->string('residence_country');
            $table->string('homeland_country');
            $table->string('email')->unique();
            $table->string('username');
            $table->string('password');
            $table->integer('whatsapp');
            $table->integer('body_type');
            $table->integer('activity_level');
            $table->integer('fitness_level');
            $table->string('health_status');
            $table->string('injuries_info');
            $table->string('training_tools');
            $table->string('training_place');
            $table->integer('training_goal');
            $table->integer('general_goal');
            $table->integer('weight_goal');
            $table->integer('fat_goal');
            $table->integer('weight_on_start');
            $table->integer('fat_on_start');
            $table->date('join_date');
            $table->integer('wrist_size');
            $table->string('note')->nullable();
            $table->integer('training_plans_id')->nullable()->index('diets_plans_id_FK');
            $table->integer('diets_plans_id')->nullable()->index('training_plans_id_FK');
            $table->string('role')->default('user');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
