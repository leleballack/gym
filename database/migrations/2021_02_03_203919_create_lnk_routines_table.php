<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLnkRoutinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lnk_routines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('workout_id');
            $table->unsignedBigInteger('exercise_id');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('lnk_routines', function (Blueprint $table) {
            $table->foreign('workout_id')->references('id')->on('workouts');
            $table->foreign('exercise_id')->references('id')->on('exercises');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lnk_routines', function (Blueprint $table) {
            $table->dropForeign(['exercise_id']);
            $table->dropForeign(['workout_id']);
        });

        Schema::dropIfExists('lnk_routines');
    }
}
