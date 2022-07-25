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
            $table->text('studentname');
            $table->text('studentid');
            $table->text('courseid');
            $table->text('amountpaid');
            $table->text('balanceremaining')->nullable();
            $table->text('stage')->nullable();
            $table->text('finished')->default(0);
            $table->text('expired')->default(0);
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
