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
        Schema::create('train', function (Blueprint $table) {
            $table->id();
            $table->string('train_company', 255)->unique();
            $table->string('departure_station', 255);
            $table->string('arrival_station', 255);
            $table->time('departure_time', 6);
            $table->time('arrival_time', 6);
            $table->string('train_code', 8)->unique();
            $table->tinyInteger('railroad_car_number', 100)->unsigned();
            $table->string('on_time', 100);
            $table->string('cancelled', 100);
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
        Schema::dropIfExists('train');
    }
};
