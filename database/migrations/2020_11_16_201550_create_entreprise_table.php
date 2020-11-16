<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrepriseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprise', function (Blueprint $table) {
            $table->id();
            $table->string('raison_sociale');
            $table->string('adresse');
            $table->string('ville');
            $table->string('telephone');
            $table->string('email');
            $table->integer('rc');
            $table->integer('cnss');
            $table->integer('nif');
            $table->string('logo');
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
        Schema::dropIfExists('entreprise');
    }
}
