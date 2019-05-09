<?php
 
use Faker\Generator as Faker;
 
$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'description' => $faker->text(),
        'user_id' => factory('App\User')->create()->id,
    ];
});
