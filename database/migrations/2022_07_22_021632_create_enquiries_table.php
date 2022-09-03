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
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name' ,400);
            $table->string('email' ,400);
            $table->string('phone' ,400);
            $table->string('title' ,400);
            $table->text('message' );
            $table->string('responded' ,400)->default(0);
            $table->string('enquiry',400)->default(1);
            $table->string('responsemessage' ,400)->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enquiries');
    }
};
