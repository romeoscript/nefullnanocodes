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
            $table->string('name' ,200);
            $table->string('email' ,200);
            $table->string('phone' ,200)->nullable();
            $table->string('skill' ,200)->nullable();
            $table->text('description')->nullable();
            $table->string('instagram' ,200)->nullable();
            $table->string('twitter' ,200)->nullable();
            $table->string('facebook' ,200)->nullable();
            $table->string('userid' ,200)->nullable();
            $table->string('pic' ,200)->nullable();
            $table->string('github' ,200)->nullable();
            $table->string('state' ,200)->nullable();
            $table->string('lga' ,200)->nullable();
            $table->string('ig' ,200)->nullable();
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
