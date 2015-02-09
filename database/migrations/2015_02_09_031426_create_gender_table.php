<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gender', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('code', 1);
            $table->string('name', 20);
			$table->timestamps();
		});

        $this->fill();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gender');
	}


    /**
     * Fill with default values
     *
     * @return void
     */
    private function fill()
    {
        DB::table('gender')->insert(
            [
                [
                    'code' => 'P',
                    'name' => 'PRIA'
                ],
                [
                    'code' => 'W',
                    'name' => 'WANITA'
                ]
            ]
        );
    }

}
