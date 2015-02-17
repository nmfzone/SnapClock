<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimesheetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('timesheets', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('employee_id');
            $table->integer('week_number');
            $table->date('sheet_date');
            $table->integer('work_hour')->unsigned();
            $table->enum('running', ['0', '1'])->default('1');
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
		Schema::drop('timesheets');
	}

}
