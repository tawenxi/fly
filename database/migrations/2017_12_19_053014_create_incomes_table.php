<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomesTable extends Migration 
{
	public function up()
	{
		Schema::create('incomes', function(Blueprint $table) {
            $table->increments('id');
            
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('incomes');
	}
}
