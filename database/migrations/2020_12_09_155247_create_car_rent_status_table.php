<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarRentStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_rent_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('car_rent_status');
            $table->boolean('is_default')->default(0);
            $table->string('car_rent_status_color')->default(-1);
            $table->string('car_rent_status_icon')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_rent_statuses');
    }
}
