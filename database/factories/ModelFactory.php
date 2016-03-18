<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'admin' => 0,
        'email' => $faker->email,
        'tel' => $faker->phoneNumber,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    return [
        'user_id' => mt_rand(1, 10),
        'title' => $faker->text,
        'content' => $faker->text,
    ];
});

$factory->define(App\Models\Comment::class, function (Faker\Generator $faker) {
    return [
        'user_id' => mt_rand(1, 10),
        'post_id' => mt_rand(1,20),
        'content' => $faker->text,
    ];
});


$factory->define(App\Models\Projet::class, function (Faker\Generator $faker) {
    return [
        'user_id' => mt_rand(1, 10),
        'nom' => $faker->name,
        'email' => $faker->email,
        'tel' => $faker->phoneNumber,
        'nomduprojet' =>$faker->sentence,
        'fonction' => 'PDG',
        'adresse' =>$faker->address,
        'nom' =>$faker->name,
        'fonction' => 'secretaire',
        'adresse' =>$faker->address,
        'email' =>$faker->email,
        'tel' =>$faker->phoneNumber,
        'demande' =>$faker->text($maxNbChars = 100),
        'objectif' =>$faker->text($maxNbChars = 100),
        'contrainte' =>$faker->text($maxNbChars = 100),
        'validation' =>$faker->text($maxNbChars = 100)

    ];
});