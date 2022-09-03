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
            $table->text('bankacno' ,400);
            $table->text('accname' ,400);
            $table->text('bank' ,400);
            $table->text('coinamount' ,400);
            $table->text('coin' ,400);
            $table->text('dollarrate' ,400);
            $table->text('coin2dollar' ,400);
            $table->text('phone' ,400);
            $table->text('email' ,400);
            $table->text('amountinnaira' ,400);
            $table->text('paid' ,400)->default(0);
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
