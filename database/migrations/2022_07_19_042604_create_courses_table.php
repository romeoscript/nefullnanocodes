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
            $table->string('course' ,200);
            $table->text('description');
            $table->string('price' ,200);
            $table->string('prerequisite' ,200)->nullable();
            $table->string('tutor' ,200);
            $table->string('maxduation' ,200);
            $table->string('courseouline' ,200);
            $table->string('timetable' ,200);
            $table->string('courseimage' ,400);
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
