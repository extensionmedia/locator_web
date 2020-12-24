<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceAccountMouvementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_account_mouvements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('finance_account_id');
            $table->unsignedBigInteger('finance_account_mouvement_category_id');
            $table->unsignedBigInteger('payment_type_id');
            $table->string('description');
            $table->date('account_mouvement_date');
            $table->string('source');
            $table->integer('source_id')->default(0);
            $table->float('account_mouvement_in')->default(0);
            $table->float('account_mouvement_out')->default(0);

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
        Schema::dropIfExists('finance_account_mouvements');
    }
}
