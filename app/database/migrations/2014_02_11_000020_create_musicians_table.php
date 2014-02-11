<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMusiciansTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musicians', function(Blueprint $table) {
            $table->engine ='InnoDB';

            $table->increments('id');
            
            $table->string('slug');

            $table->string('name');
            $table->string('style');
            
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
        Schema::drop('musicians');
    }

}
