<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReligionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('religions', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('code', 5);
            $table->string('name', 25);
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
		Schema::drop('religions');
	}

    /**
     * Fill with default values
     *
     * @return void
     */
    private function fill()
    {
        DB::table('religions')->insert(
            [
                [
                    'code' => 'I',
                    'name' => 'ISLAM'
                ],
                [
                    'code' => 'P',
                    'name' => 'KRISTEN PROTESTAN'
                ],
                [
                    'code' => 'K',
                    'name' => 'KATOLIK'
                ],
                [
                    'code' => 'H',
                    'name' => 'HINDU'
                ],
                [
                    'code' => 'B',
                    'name' => 'BUDDHA'
                ],
                [
                    'code' => 'C',
                    'name' => 'KONG HU CU'
                ]
            ]
        );
    }

}
