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
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'twzipcode' => $faker->state,
        'twzipcode2' => $faker->state,
        'twzipcode3' => $faker->state,
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
        'gender' =>$faker->phoneNumber,
        'identitycard'=> $faker->phoneNumber,
        'phone'=> $faker->phoneNumber,
        'birthday' =>$faker->phoneNumber,
        'email'=> $faker->unique()->safeEmail,
        'address1' => $faker->state,
        'address2'=> $faker->state,
        'address3'=> $faker->state,
        'license'=>$faker->phoneNumber,
        'speciality'=>$faker->phoneNumber,
        'experience'=>$faker->phoneNumber,
        'selfintroduction'=>$faker->phoneNumber,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
        //'remember_token' => str_random(10),
    ];
});
