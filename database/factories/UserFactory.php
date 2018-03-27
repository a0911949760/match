<?php

use Faker\Generator as Faker;

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

$factory->define(App\Userscare::class, function (Faker $faker) {
    $fullCity =  $faker->city;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'city' => mb_substr($fullCity, 0, 3), // city
        'region' => mb_substr($fullCity, 3), // region
        'zipcode' => $faker->postcode,
        'birthday' => $faker->date,
        'phone' => $faker->phoneNumber,
        'speciality' => $faker->word,
        'experience' => $faker->jobTitle,
        'identitycard' => $faker->personalIdentityNumber,        
        
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        //'remember_token' => str_random(10),
    ];
}); 

$factory->define(App\User::class, function (Faker $faker) {
    return [
      
        'name'=> $faker->name,
        'email'=> $faker->unique()->safeEmail,
        'address1' => $faker->state,
        'address2' => $faker->state,
        'address3' => $faker->state,
        'phone'=> $faker->phoneNumber,
        'birthday' =>$faker->date,
        'identitycard'=> $faker->personalIdentityNumber,
        'experience'=>$faker->jobTitle,
        'speciality' => $faker->word,
        'selfintroduction'=>$faker->word,
        'gender' =>$faker->boolean,
        'license'=>$faker->boolean,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',       
        //'remember_token' => str_random(10),
    ];
});
