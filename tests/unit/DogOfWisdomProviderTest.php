<?php

use NCSUFaker\DogOfWisdomProvider;

class DogOfWisdomProviderTest extends PHPUnit_Framework_TestCase
{
    public function testDogOfWisdomIpsum()
    {
        $faker = new Faker\Generator();
        $faker->addProvider(new DogOfWisdomProvider($faker));
        $this->assertNotEmpty($faker->dogOfWisdomIpsum);
    }
}
