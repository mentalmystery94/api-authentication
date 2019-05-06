<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cruds', function (Blueprint $table) {
            $table->Increments('id')->index();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('image');
            $table->enum('function', array('Programmeur','Sales','Ceo', 'Manager'));
            $table->enum('contract', array('0 uren','1 jaar','2 tot 3 jaar', 'vast'));
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    // schema for create a database

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cruds');
    }
}
