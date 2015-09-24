<?php

use NCSUFaker\NcsuLoremIpsumProvider;

class NcsuLoremIpsumProviderTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->faker = new Faker\Generator();
        $this->faker->addProvider(new NcsuLoremIpsumProvider($this->faker));
    }

    public function testDogOfWisdomIpsum()
    {
        $this->assertNotEmpty($this->faker->dogOfWisdomIpsum);
    }

    public function testTrololoIpsum()
    {
        $this->assertNotEmpty($this->faker->trololoIpsum);
    }
}
