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
            $table->string('pic');
            $table->string('pictitle');
            $table->text('description');
            $table->string('skill');
            $table->string('approved')->default(0);
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
