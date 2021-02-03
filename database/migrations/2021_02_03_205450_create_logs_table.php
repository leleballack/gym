<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('routine_id');
            $table->dateTime('datetime');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('logs', function (Blueprint $table) {
            $table->foreign('routine_id')->references('id')->on('lnk_routines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('logs', function (Blueprint $table) {
            $table->dropForeign(['routine_id']);
        });

        Schema::dropIfExists('logs');
    }
}
