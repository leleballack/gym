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
            $table->string('name');
            $table->string('description')->nullable();
            $table->unsignedBigInteger('workout_type_id');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('workouts', function (Blueprint $table) {
            $table->foreign('workout_type_id')->references('id')->on('workout_types');
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
            $table->dropForeign(['workout_type_id']);
        });

        Schema::dropIfExists('workouts');
    }
}
