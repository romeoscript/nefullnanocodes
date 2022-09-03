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
            $table->text('course' ,200);
            $table->string('description');
            $table->text('price' ,200);
            $table->text('prerequisite' ,200)->nullable();
            $table->text('tutor' ,200);
            $table->text('maxduation' ,200);
            $table->text('courseouline' ,200);
            $table->text('timetable' ,200);
            $table->text('courseimage' ,400);
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
