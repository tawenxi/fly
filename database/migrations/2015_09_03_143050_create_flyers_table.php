<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flyers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('name');

            $table->string('yuanyin');

            $table->string('cun');
            $table->string('dibaoshu');
            $table->string('tuopinnianfen');
            $table->string('gendi')->nullable();
            $table->string('ruhulu')->nullable();
            $table->string('zhufangmianji')->nullable();
            $table->string('shifouweifang')->nullable();
            $table->string('weishengce')->nullable();

            $table->text('description')->nullable();
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
        Schema::drop('flyers');
    }
}
