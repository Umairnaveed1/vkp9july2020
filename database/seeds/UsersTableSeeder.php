<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Agents\Agent;
use App\User;



class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
//    {
//        factory(App\User::class, 50)->create()->each(function ($user) {
//            $user->agents()->save(factory(App\Models\Agents\Agent::class)->make());
//        });
//    }
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('users')->insert([
                'UserName' => $faker->name,
                'email' => $faker->email,
                'office_id' => 1,
                'PageSecurity' => $faker->randomDigit,
                'AdminUser' => $faker->randomDigit,
                'Approvebill' => $faker->randomDigit,
                'agent_id' => 1,
                'password' => bcrypt('secret'),
            ]);
        }

    }

}
