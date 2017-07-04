<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        
        Schema::create('config', function (Blueprint $table) {
            $table->increments('id');
            $table->string('webname');
            $table->string('keyword');
            $table->string('logo');
            $table->string('copy');
            $table->tinyInteger('status')->default('1'); 
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
