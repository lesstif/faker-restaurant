<?php

use PHPUnit\Framework\TestCase;

class RestaurantTestTest extends TestCase
{
    public function testFoodName()
    {
        $faker = \Faker\Factory::create();

        $lp = new Lesstif\FakerProvider\ko_KR\Restaurant($faker);

        $faker->addProvider($lp);

        var_dump($faker->foodName());
        var_dump($faker->beverageName());

        $this->assertEquals(true, true);
    }
}
