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
        Schema::create('countries', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name_en', 80);
            $table->string('name_ar', 80);
            $table->char('iso2', 2);
            $table->char('iso3', 3);
            $table->char('currency', 3);
            $table->integer('dial_code');
            $table->boolean('is_arabian_country');
            $table->boolean('is_khaliji_country');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
};
