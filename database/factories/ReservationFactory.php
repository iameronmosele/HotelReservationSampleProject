<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Reservation;
use App\Models\Room;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Reservation::class, function (Faker $faker) {
    return [
        'reference' => Str::random(12),
        'room_id' => factory(App\Models\Room::class),
        'email' => $faker->email,
        'mobile_number' => $faker->phoneNumber,
        'reserved_from' => $faker->dateTime,
        'reserved_to' => $faker->dateTime,
        'status' => $faker->randomElement([1, 10, 0]),
    ];
});
