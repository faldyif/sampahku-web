<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFalseReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_false_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('trash_id')->unsigned();
            $table->foreign('trash_id')->references('id')->on('trashes');            
            $table->string('photo_path');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('accuracy');
            $table->integer('approved')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_false_reports');
    }
}
