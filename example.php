<?php

include "vendor/autoload.php";

$faker = new Faker\Generator();
$faker->addProvider(new \NCSUFaker\NcsuLoremIpsumProvider($faker));


echo $faker->dogOfWisdomIpsum(rand(1,20)).PHP_EOL;
echo $faker->trololoIpsum(rand(1,20)).PHP_EOL;
