<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\OfficeManager\OfficeManager;
use Faker\Generator as Faker;
use App\Models\Agents\Agent;

$factory->define(App\Models\OfficeManager\OfficeManager::class, function (Faker $faker) use ($factory) {
    return [
        'office_description' => $faker->name,
        'office_address' => $faker->address,
        'office_phone' => $faker->randomNumber(),
        'office_fax' => $faker->sentence,
        'office_email' => $faker->email,
        'manager' => $faker->word,
        'co_manager' => $faker->sentence,
        'agent_id' => $factory->create(App\Models\Agents\Agent::class)->id,
    ];
});
