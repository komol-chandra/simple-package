<?php

use App\Services\ArrayParseService;

require __DIR__ . "/vendor/autoload.php";

$data = [
    [
        "product_name"     => "Hoodie",
        "product_code"     => "GS0031",
        "price"            => 180.00,
        "discount_percent" => 5,
        "status"           => 1,
    ],
    [
        "product_name"     => "Polo Shirt",
        "product_code"     => "GS0F34",
        "price"            => 185.00,
        "discount_percent" => 0,
        "status"           => 0,
    ],
    [
        "product_name"     => "Jeans",
        "product_code"     => "GS0H81",
        "price"            => 170.00,
        "discount_percent" => 8,
        "status"           => 1,
    ],
    [
        "product_name"     => "Jacket",
        "product_code"     => "GS0H45",
        "price"            => 165.00,
        "discount_percent" => 3,
        "status"           => 0,
    ],
    [
        "product_name"     => "Punjabi",
        "product_code"     => "GS0X23",
        "price"            => 155.00,
        "discount_percent" => 2,
        "status"           => 0,
    ],

];

$return_data = ArrayParseService::make($data)->toArray();
print_r($return_data);
