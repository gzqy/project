<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          Schema::create('userd', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('uid');
            $table->char('qq', 11);
            $table->char('sign',20);
            $table->string('address');
            $table->string('edu');
            $table->string('myself');
            $table->enum('sex', ['w', 'm'])->default('m');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
