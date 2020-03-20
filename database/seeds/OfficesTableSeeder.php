<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OfficesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('offices')->insert([
                'office_description' => $faker->word,
                'office_address' => $faker->address,
                'office_phone' => $faker->numberBetween(1,9),
                'office_fax' => $faker->sentence,
                'office_email' => $faker->email,
                'manager' => $faker->word,
                'agent_id' => $faker->randomDigit,
                'co_manager' => $faker->word,
            ]);
        }
    }
}
