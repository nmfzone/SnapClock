<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeEntriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('time_entries', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('timesheet_id');
            $table->integer('employee_id');
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->string('entry_start_photo');
            $table->string('entry_end_photo');
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
        Schema::drop('time_entries');
	}

}
