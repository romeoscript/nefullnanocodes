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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('course');
            $table->text('description');
            $table->text('price');
            $table->text('prerequisite')->nullable();
            $table->text('tutor');
            $table->text('maxduation');
            $table->text('courseouline');
            $table->text('timetable');
            $table->text('courseimage');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
