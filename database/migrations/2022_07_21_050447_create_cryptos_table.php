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
        Schema::create('cryptos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('bankacno');
            $table->text('accname');
            $table->text('bank');
            $table->text('coinamount');
            $table->text('coin');
            $table->text('dollarrate');
            $table->text('coin2dollar');
            $table->text('phone');
            $table->text('email');
            $table->text('amountinnaira');
            $table->text('paid')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cryptos');
    }
};
