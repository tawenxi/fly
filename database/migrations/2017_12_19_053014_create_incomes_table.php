<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomesTable extends Migration 
{
	public function up()
	{
		Schema::create('incomes', function(Blueprint $table) {
            $table->increments('id');
            $table->date('date');

            $table->integer('flyer_id');
            $table->string('zy');
            $table->string('amount');
            $table->string('type');
        });
	}

	public function down()
	{
		Schema::drop('incomes');
	}
}
