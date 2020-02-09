<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\RoomType;
use Faker\Generator as Faker;

$factory->define(RoomType::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['classic', 'deluxe', 'executive deluxe']),
        'image' => $faker->imageUrl(),
        'description' => $faker->text
    ];
});
