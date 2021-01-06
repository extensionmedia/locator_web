<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('client_status');
            $table->boolean('is_default')->default(0);
            $table->string('client_status_color')->default(-1);
            $table->string('client_status_icon')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_statuses');
    }
}
