<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\OrderItem;
use Faker\Generator as Faker;
use App\Models\Product;

$factory->define(OrderItem::class, function (Faker $faker) {
    // 从数据库随机取一条商品
    $product = Product::query()->where('on_sale', true)->inRandomOrder()->first();
    // 从商品的 SKU 中随机取一条
    $sku = $product->skus()->inRandomOrder()->first();
    return [
        'amount'    => random_int(1, 5),
        'price'     => $sku->price,
        'rating'    => null,
        'review'    => null,
        'reviewed_at'   => null,
        'product_id'    => $product->id,
        'product_sku_id'    => $sku->id,
    ];
});
