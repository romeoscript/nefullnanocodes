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
        Schema::create('gallerysprites', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('pic' ,200);
            $table->string('pictitle' ,200);
            $table->text('description');
            $table->string('skill' ,200);
            $table->string('approved' ,200)->default(0);
            $table->integer("studentid")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gallerysprites');
    }
};
