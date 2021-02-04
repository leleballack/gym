<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_entries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('log_id');
            $table->integer('time')->nullable();
            $table->integer('km')->nullable();
            $table->integer('sets')->nullable();
            $table->integer('reps')->nullable();
            $table->float('weight')->nullable();
            $table->float('rest')->nullable();
            $table->text('note')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('log_entries', function (Blueprint $table) {
            $table->foreign('log_id')->references('id')->on('logs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('log_entries', function (Blueprint $table) {
            $table->dropForeign(['log_id']);
        });

        Schema::dropIfExists('log_entries');
    }
}
