<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateThrottlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('throttles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('ip_address');
			$table->integer('attemps');
			$table->string('suspended');
			$table->string('banned');
			$table->date('last_attempt_at');
			$table->date('suspended_at');
			$table->date('banned_at');
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
		Schema::drop('throttles');
	}

}
