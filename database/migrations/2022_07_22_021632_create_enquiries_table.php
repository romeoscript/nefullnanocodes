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
            $table->string('name' ,200);
            $table->string('email' ,200);
            $table->string('phone' ,200);
            $table->string('title' ,200);
            $table->text('message' );
            $table->string('responded' ,200)->default(0);
            $table->string('enquiry',200)->default(1);
            $table->string('responsemessage' ,200)->nullable;
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
