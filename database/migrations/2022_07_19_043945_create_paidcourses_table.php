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
        Schema::create('paidcourses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('studentname',400);
            $table->text('studentid' ,400);
            $table->text('courseid' ,400);
            $table->text('amountpaid' ,400);
            $table->text('balanceremaining',400)->nullable();
            $table->text('stage' ,400)->nullable();
            $table->text('finished' ,400)->default(0);
            $table->text('expired' ,400)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paidcourses');
    }
};
