<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_rents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('car_id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('client_id_2');
            $table->unsignedBigInteger('car_rent_status_id');
            $table->date('car_rent_status_date');
            $table->date('car_rent_start_date');
            $table->date('car_rent_end_date');
            $table->float('car_rent_total');
            $table->float('car_rent_discount');
            $table->integer('car_rent_days');
            $table->integer('car_kilometrage_start');
            $table->integer('car_kilometrage_end');
            $table->integer('car_rent_tank');
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
        Schema::dropIfExists('car_rents');
    }
}
