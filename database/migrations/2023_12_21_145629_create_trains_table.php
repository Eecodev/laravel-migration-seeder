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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('train_company', 255);
            $table->string('departure_station', 255);
            $table->string('arrival_station', 255);
            $table->time('departure_time', 6);
            $table->time('arrival_time', 6);
            $table->string('train_code', 8);
            $table->tinyInteger('railroad_car_number')->unsigned()->default(1);
            $table->boolean('on_time')->default(true);
            $table->boolean('cancelled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
