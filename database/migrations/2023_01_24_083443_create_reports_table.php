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
        Schema::create('reports', function (Blueprint $table) {
            $table->comment('');
            $table->integer('id', true);
            $table->integer('user_id')->index('user_id_reports_FK');
            $table->integer('height');
            $table->integer('weight');
            $table->integer('fat');
            $table->integer('neck');
            $table->integer('waist');
            $table->integer('hip');
            $table->integer('chest');
            $table->integer('shoulder');
            $table->integer('arm');
            $table->integer('thigh');
            $table->integer('forearm');
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
        Schema::dropIfExists('reports');
    }
};
