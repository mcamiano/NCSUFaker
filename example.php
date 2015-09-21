<?php

include "vendor/autoload.php";

$faker = new Faker\Generator();
$faker->addProvider(new \NCSUFaker\DogOfWisdomProvider($faker));


echo $faker->dogOfWisdomIpsum(rand(1,20));
