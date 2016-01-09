<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCallLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('call_logs', function(Blueprint $table)
		{
		$table->increments('id');
			$table->timestamps();
			$table->integer('user_id')->unsigned();
	
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('call_logs');
	}

}
