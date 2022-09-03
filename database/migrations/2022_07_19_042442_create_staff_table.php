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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('name' ,200);
            $table->text('email' ,200);
            $table->text('phone' ,200)->nullable();
            $table->text('skill' ,200)->nullable();
            $table->string('description')->nullable();
            $table->text('instagram' ,200)->nullable();
            $table->text('twitter' ,200)->nullable();
            $table->text('facebook' ,200)->nullable();
            $table->text('userid' ,200)->nullable();
            $table->text('pic' ,200)->nullable();
            $table->text('github' ,200)->nullable();
            $table->text('state' ,200)->nullable();
            $table->text('lga' ,200)->nullable();
            $table->text('ig' ,200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
};
