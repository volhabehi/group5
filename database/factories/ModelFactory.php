<?php



$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Article::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(rand(3, 7)),
        'short_description' => $faker->sentence(rand(10, 30)),
        'content' => $faker->text,
        'user_id' => 1
    ];
});
