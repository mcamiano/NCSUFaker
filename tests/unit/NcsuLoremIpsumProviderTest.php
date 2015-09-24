<?php

use NCSUFaker\NcsuLoremIpsumProvider;

class NcsuLoremIpsumProviderTest extends PHPUnit_Framework_TestCase
{
    public function testDogOfWisdomIpsum()
    {
        $faker = new Faker\Generator();
        $faker->addProvider(new NcsuLoremIpsumProvider($faker));
        $this->assertNotEmpty($faker->dogOfWisdomIpsum);
    }
}
