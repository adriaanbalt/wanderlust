<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateModelsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models', function(Blueprint $table) {
            $table->engine ='InnoDB';

            $table->increments('id');
            
            $table->string('slug');

            $table->string('name');
            $table->string('height');
            $table->string('bust');
            $table->string('waist');
            $table->string('hips');
            $table->string('shoes');
            $table->string('hair');
            $table->string('eyes');
            
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
        Schema::drop('models');
    }

}
