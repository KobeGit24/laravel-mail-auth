<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Smartphone;
use Faker\Generator as Faker;

$factory->define(Smartphone::class, function (Faker $faker) {

  return [

    'name' => $faker -> word(),
    'description' => $faker -> text($maxNbChars = 20),
    'price' => $faker -> randomFloat($nbMaxDecimals = 2, $min = 10, $max = 2000)

  ];

});
