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
            $table->dateTime('clock_in');
            $table->dateTime('clock_out');
            $table->string('photo_in');
            $table->string('photo_out');
            $table->time('duration');
            $table->integer('employee_id');
            $table->date('snap_date');
            $table->text('description');
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
