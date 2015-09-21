<?php

use NCSUFaker\CalendarProvider;
use NCSUFaker\NumberProvider;

class CalendarProviderTest extends PHPUnit_Framework_TestCase
{
    public function testStrm()
    {
        $faker = new Faker\Generator();
        $faker->addProvider(new CalendarProvider($faker));
        $this->assertNotEmpty($faker->strm);
    }

    public function testNaturalNumber()
    {
        $faker = new Faker\Generator();
        $faker->addProvider(new NumberProvider($faker));
        $this->assertNotEmpty($faker->naturalNumber);
    }
}
