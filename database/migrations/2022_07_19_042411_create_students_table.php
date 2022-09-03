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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name',200)->unique();
            $table->string('sex' ,200);
            $table->string('state',200);
            $table->string('lga' ,200);
            $table->string('address' ,200);
            $table->string('email' ,200)->unique();
            $table->string('phone' ,200);
            $table->string('studentpassport' ,200)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
