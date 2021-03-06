<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Product;
use App\User;
use Faker\Generator as Faker;
use phpDocumentor\Reflection\Types\Boolean;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
        'category_id' => $faker->numberBetween(1,Category::all()->count()),
        'user_id' => $faker->numberBetween(1,User::all()->count()),
        'price_cost' => $faker->randomFloat(2,1,4),
        'sales_price' => $faker->numberBetween(3,10)*$faker->randomFloat(1,1,2),
        '_public'=>$faker->boolean,
        'inStock' => $faker->randomNumber(2),
        'description' => $faker->text
    ];
});
