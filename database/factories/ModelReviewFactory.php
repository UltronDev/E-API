<?php

use App\Model\Product;
use Faker\Generator as Faker;
use \App\Model\Review;


$factory->define(Review::class, function (Faker $faker) {
    return [
    	'product_id' => function() {
	    	return Product::all()->random();
	    },
        'customer' => $faker->name(),
	    'review' => $faker->paragraph(),
	    'rating' => $faker->numberBetween(0, 5),
    ];
});
