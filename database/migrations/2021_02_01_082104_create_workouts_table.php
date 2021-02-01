<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('name_id');
            $table->unsignedBigInteger('exercise_id');
            $table->timestamps();
        });

        Schema::table('workouts', function (Blueprint $table) {
            $table->foreign('exercise_id')->references('id')->on('exercises');
            $table->foreign('name_id')->references('id')->on('workout_names');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('workouts', function (Blueprint $table) {
            $table->dropForeign(['exercise_id']);
        });

        Schema::dropIfExists('workouts');
    }
}
