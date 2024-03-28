<?php

namespace App\Controllers;

use App\Models\ProductModel;

class HomeController extends BaseController
{
    public function index()
    {
        $products = ProductModel::all();
        $title = "WEBSITE Bán hàng online ABC";

        $this->render(
            'home',
            [
                'products' => $products,
                'title' => $title
            ]
        );
    }

    public function detail($id)
    {
        $product = ProductModel::find($id);
        dd($product);
        $title = $product->name;

        $this->render(
            'detail',
            [
                'product' => $product,
                'title' => $title
            ]
        );
    }
}
