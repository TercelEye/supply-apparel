<?php
use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

//Category
$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->company,
        'parent_id' => 0,
        'row_order' => 0,
        'status' => 1,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
   
    ];

});
//shops
$factory->define(App\Shop::class, function ($faker) {
    return [
        'shop_name' => $faker->userName ,
        'shop_slug' =>  $faker->slug,
        'description' =>  $faker->paragraph,
        'status' =>  1,
        'owner_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
    ];
});

//products
$factory->define(App\Product::class, function ($faker) {
    return [
        'title' => $faker->word,
        'price' => rand(12, 57) / 10,
        'description' => $faker->paragraph,
        'shop_id' => function () {
            return factory(App\Shop::class)->create()->id;
        },
         'category_id' => function () {
            return factory(App\Category::class)->create()->id;
        },
        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
    ];
});
