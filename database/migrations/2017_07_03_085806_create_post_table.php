<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('post', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('uid');
            $table->tinyInteger('tid');
            $table->string('title');
            $table->string('content');
            $table->string('address');
            $table->timestamps();
            $table->tinyInteger('count');
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
