<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Agents\Agent;
use Faker\Generator as Faker;

$factory->define(App\Models\Agents\Agent::class, function (Faker $faker) use ($factory) {
    return [
        'agentfirstname' => $faker->name,
        'agentlastname' => $faker->lastName,
        'agentcellphone' => $faker->randomDigit,
        'agenthome' => $faker->word,
        'agentAltNo' => $faker->randomDigit,
        'agentofficeno' => $faker->word,
        'agenthiredate' => $faker->sentence,
        'agentover' => $faker->name,
        'agentadve' => $faker->unique()->safeEmail,
        'agentsocial' => $faker->randomDigit,
        'AgentDate' => $faker->word,
        'agentemail' => $faker->email,
        'agentaddress' => $faker->word,
        'agentzipid' => $faker->sentence,
        'agentsever' => $faker->sentence,
        'agentInAct' => $faker->sentence,
        'user_id' => $factory->create(App\User::class)->id,
    ];
});
