<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliesTable extends Migration 
{
	public function up()
	{
		Schema::create('families', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('flyer_id')->unsigned();

            $table->string('name');
            $table->string('sex');
            $table->string('ralationship');
            $table->date('birthday')->nullable();
            $table->string('schoolage')->nullable();
            $table->string('work')->nullable();
            $table->string('healthy')->nullable();
            $table->string('salary')->nullable();
            $table->string('workmonth')->nullable();
            $table->string('description')->nullable();
        });
	}

	public function down()
	{
		Schema::drop('families');
	}
}
