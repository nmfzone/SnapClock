<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganaizationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('organizations', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('address1');
            $table->string('address2');
            $table->string('phone');
            $table->string('fax');
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
		Schema::drop('organizations');
	}


    /**
     * Fill with default values
     *
     * @return void
     */
    private function fill()
    {
        DB::table('organizations')->insert(
            [
                'name' => 'FAKULTAS PASCA SARJANA',
                'address1' => 'JALAN HANGLEKIR 1',
                'address2' => 'JAKARTA PUSAT',
                'phone' => '021-324322',
                'fax' => '021-4321323'
            ]
        );
    }
}
