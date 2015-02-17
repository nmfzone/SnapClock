<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employees', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('role_id');
            $table->string('employee_number', 20);
            $table->string('username', 50);
            $table->string('firstname', 25);
            $table->string('lastname', 25);
            $table->string('email', 50);
            $table->string('password', 100);
            $table->tinyInteger('gender_id');
            $table->tinyInteger('religion_id');
            $table->integer('departement_id');
            $table->integer('position_id');
            $table->string('address1');
            $table->string('address2');
            $table->string('phone_number', 25);
            $table->string('mobile_number', 25);
            $table->date('birthday');
            $table->string('birth_place');
            $table->integer('city_id');
            $table->string('postcode');
            $table->rememberToken();
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
		Schema::drop('employees');
	}

}
