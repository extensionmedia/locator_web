<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('client_category_id');
            $table->unsignedBigInteger('client_type_id');
            $table->unsignedBigInteger('client_status_id');
            $table->string('client_name');
            $table->date('client_date_naissance');
            $table->string('client_telephone_1');
            $table->string('client_telephone_2');
            $table->string('client_email');
            $table->string('client_city');
            $table->string('client_adresse');
            $table->string('client_cin');
            $table->date('client_cin_date_expiration');
            $table->string('client_passport');
            $table->date('client_passport_date_expiration');
            $table->string('client_nationality');
            $table->string('client_photo_profile');
            $table->string('client_permis');
            $table->string('client_permis_type', 2);
            $table->date('client_permis_date_livraison');
            $table->string('client_permis_lieu_livraison');
            $table->date('client_permis_date_expiration');
            $table->float('client_total_rent', 8, 2)->default('0.00');
            $table->float('client_total_accompte', 8, 2)->default('0.00');
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
        Schema::dropIfExists('clients');
    }
}
