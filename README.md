# NCSU Faker

Faker providers for NCSU test seed data

## Usage

With fzaninotto/Faker:

```
$faker = new Faker\Generator();
$faker->addProvider(new \NCSUFaker\CalendarProvider($faker));
```


## Installation

`composer require mcamiano/ncsu-faker`

## Providers

### CalendarProvider

Enumerations of various entities used to structure schedules, calendar periods, and events.

strm    // four digit Semester TeRM code

## DogOfWisdomProvider

dogOfWisdomIpsum    // Lorem ipsum wisdom, dog style

### Miscellaneous

naturalNumber  // non-zero whole number
