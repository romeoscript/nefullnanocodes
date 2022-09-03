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
            $table->text('name',200)->unique();
            $table->text('sex' ,200);
            $table->text('state',200);
            $table->text('lga' ,200);
            $table->text('address' ,200);
            $table->text('email' ,200)->unique();
            $table->text('phone' ,200);
            $table->text('studentpassport' ,200)->nullable();

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
