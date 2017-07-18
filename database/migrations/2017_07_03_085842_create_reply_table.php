<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('reply', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('hid');
            $table->tinyInteger('tid');
            $table->varchar('content');
			$table->varchar('ctime');
			$table->varchar('zannum');
			$table->varchar('shoucang');
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
        //
    }
}
