<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Models\Agents\Agent;
use App\Models\OfficeManager\OfficeManager;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) use ($factory) {
    return [
        'UserName' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'office_id' => $factory->create(App\Models\OfficeManager\OfficeManager::class)->id,
        'PageSecurity' => $faker->randomDigit,
        'AdminUser' => $faker->randomDigit,
        'Approvebill' => $faker->boolean,
        'agent_id' => $factory->create(App\Models\Agents\Agent::class)->id,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),

    ];
});
