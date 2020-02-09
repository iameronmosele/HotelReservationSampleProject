<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
    return [
        'room_number' => $faker->firstName,
        'room_type_id' => factory(App\Models\RoomType::class),
    ];
});
