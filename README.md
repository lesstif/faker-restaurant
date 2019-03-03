## Faker Provider

Faker Provider package made by mine.

## Installation

```sh
composer require lesstif/faker-restaurant
```

or manual add

```sh
"repositories": [
    {
        "type": "path",
        "url": "./faker-provider"
    },
 ],   

```

```php
<?php

$faker = \Faker\Factory::create();

$lp = new Lesstif\FakerProvider\ko_KR\Restaurant($faker);

$faker->addProvider($lp);

// Generator
$faker->foodName();      // A random Food Name
$faker->beverageName();  // A random Beverage Name
```

## Inspired by 

- [jzonta/faker-restaurant](https://github.com/jzonta/FakerRestaurant)