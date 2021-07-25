<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Deal;
use Faker\Generator as Faker;

$factory->define(Deal::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'code' => $faker->word,
        'type' => $faker->word,
        'barcode_symbology' => $faker->word,
        'brand_id' => $faker->randomDigitNotNull,
        'category_id' => $faker->randomDigitNotNull,
        'unit_id' => $faker->randomDigitNotNull,
        'purchase_unit_id' => $faker->randomDigitNotNull,
        'sale_unit_id' => $faker->randomDigitNotNull,
        'cost' => $faker->word,
        'price' => $faker->word,
        'qty' => $faker->randomDigitNotNull,
        'alert_quantity' => $faker->randomDigitNotNull,
        'promotion' => $faker->word,
        'promotion_price' => $faker->word,
        'starting_date' => $faker->word,
        'last_date' => $faker->word,
        'tax_id' => $faker->randomDigitNotNull,
        'tax_method' => $faker->randomDigitNotNull,
        'image' => $faker->text,
        'file' => $faker->word,
        'is_variant' => $faker->word,
        'is_batch' => $faker->word,
        'is_diffPrice' => $faker->word,
        'featured' => $faker->word,
        'product_list' => $faker->word,
        'qty_list' => $faker->word,
        'price_list' => $faker->word,
        'product_details' => $faker->text,
        'is_active' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
