<?php

use App\Models\ProductModel;

require_once "env.php";
require_once "functions.php";
require_once __DIR__ . "/vendor/autoload.php";

// $products = ProductModel::all();

$product = ProductModel::find(143);
dd($product);

$data = [
    "name" => "Iphone 16",
    "price" => 1200,
    "image" => "iphone16.jpg"
];
ProductModel::insert($data);
