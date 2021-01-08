<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_brand_id');
            $table->unsignedBigInteger('car_brand_serie_id');
            $table->unsignedBigInteger('car_carburant_id');
            $table->unsignedBigInteger('car_class_id');
            $table->unsignedBigInteger('car_color_id');
            $table->unsignedBigInteger('car_gearbox_id');
            $table->unsignedBigInteger('car_puissance_id');

            $table->date('car_start_date')->nullable();

            $table->float('car_prix_achat')->default('0');
            $table->float('car_prix_vente')->default('0');

            $table->float('car_rent_price_day')->default('0');
            $table->float('car_rent_price_2days')->default('0');
            $table->float('car_rent_price_3days')->default('0');
            $table->float('car_rent_price_4days')->default('0');
            $table->float('car_rent_price_5days')->default('0');
            $table->float('car_rent_price_6days')->default('0');
            $table->float('car_rent_price_week')->default('0');
            $table->float('car_rent_price_month')->default('0');
            
            $table->string('car_matricule')->nullable();
            $table->string('car_matricule_w')->nullable();

            $table->integer('car_kilometrage')->default(0);

            $table->string('car_photo')->nullable();
            $table->string('car_gps')->nullable();
            $table->string('car_numero_chassis');

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
        Schema::dropIfExists('cars');
    }
}
