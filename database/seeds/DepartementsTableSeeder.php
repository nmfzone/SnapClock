<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use SnapClock\Departement;

class DepartementsTableSeeder extends Seeder {
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 4) as $index)
        {
            Departement::create([
               'organization_id' => 1,
                'name' => $faker->domainName
            ]);
        }
    }
}