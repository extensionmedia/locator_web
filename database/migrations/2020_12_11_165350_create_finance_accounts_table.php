<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanceAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('finance_account_name');
            $table->float('finance_account_solde_initial')->default(0);
            $table->float('finance_account_solde_minimum')->default(0);
            $table->boolean('finance_account_is_active')->default(0);
            $table->boolean('finance_account_is_default')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('finance_accounts');
    }
}
