<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLnkSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lnk_sessions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('log_id');
            $table->unsignedBigInteger('member_id');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('lnk_sessions', function (Blueprint $table) {
            $table->foreign('log_id')->references('id')->on('logs');
            $table->foreign('member_id')->references('id')->on('members');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lnk_sessions', function (Blueprint $table) {
            $table->dropForeign(['member_id']);
            $table->dropForeign(['log_id']);
        });

        Schema::dropIfExists('lnk_sessions');
    }
}
