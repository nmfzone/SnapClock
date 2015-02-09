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
            $table->string('employee_number', 20);
            $table->string('firstname', 25);
            $table->string('lastname', 25);
            $table->string('email', 50);
            $table->string('password', 100);
            $table->integer('departement_id');
            $table->string('address1');
            $table->string('address2');
            $table->string('phone_number', 25);
            $table->string('mobile_number', 25);
            $table->tinyInteger('gender_id');
            $table->tinyInteger('religion_id');
            $table->date('birthday');
            $table->string('birth_place');
            $table->integer('city_id');
            $table->string('postcode');
			$table->timestamps();

//            $table->foreign('departement_id')
//                  ->references('id')->on('departements')
//                  ->onDelete('cascade');
//
//            $table->foreign('gender_id')
//                  ->references('id')->on('gender')
//                  ->onDelete('cascade');
//
//            $table->foreign('religion_id')
//                  ->references('id')->on('religions')
//                  ->onDelete('cascade');
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
