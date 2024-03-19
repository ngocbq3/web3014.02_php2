<?php

use App\Models\ProductModel;

require_once "env.php";
require_once "functions.php";
require_once __DIR__ . "/vendor/autoload.php";

// $products = ProductModel::all();

$product = ProductModel::find(143);
dd($product);

$data = [
    "name" => "Iphone 16 new",
    "price" => 1210,
    "image" => "iphone16.jpg",
    "cate_id" => 15
];
// ProductModel::insert($data);
// ProductModel::update(177, $data);
// ProductModel::delete(177);

//Lấy sản phẩm có price > 20000, từ danh mục có cate_id=6
// $products = ProductModel::where('price', '>', 40000)
//     ->andWhere('cate_id', '=', 6)->get();

$products = ProductModel::where('name', 'LIKE', "%Samir%")->get();
dd($products);
