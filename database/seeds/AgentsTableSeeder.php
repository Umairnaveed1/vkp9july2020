<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\OfficeManager\OfficeManager;
use App\Models\Agents\Agent;

class AgentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */

        public function run()
    {
        factory(App\Models\Agents\Agent::class, 50)->create()->each(function ($user) {
                $user->offices()->save(factory(App\Models\OfficeManager\OfficeManager::class)->make());
        });
//
//        $faker = Faker::create();
//        foreach (range(1,10) as $index) {
//            DB::table('agents')->insert([
//                'agentfirstname' => $faker->firstName,
//                'agentlastname' => $faker->lastName,
//                'agentdisplayname' => $faker->userName,
//                'agentcellphone' => $faker->phoneNumber,
//                'agenthome' => $faker->address,
//                'agentAltNo' => $faker->randomDigit,
//                'agentofficeno' => $faker->randomNumber(),
//                'agenthiredate' => $faker->dateTime,
//                'agentover' => $faker->date(),
//                'agentadve' => $faker->randomDigit,
//                'agentsocial' => $faker->randomLetter,
//                'AgentDate' => $faker->date(),
//                'agentemail' => $faker->email,
//                'agentaddress' => $faker->address,
//                'zipcode_id' => $faker->randomNumber(),
//                'agentsever' => $faker->randomDigit,
//                'agentInAct' => $faker->randomDigit,
//                'user_id' => $faker->randomDigit,
//            ]);
//        }
    }
}
