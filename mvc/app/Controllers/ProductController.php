<?php
//Tên namespace đặt tên theo thư mục
namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;

//Tên class đặt tên theo tên file
class ProductController extends BaseController
{
    public function list()
    {
        $products = ProductModel::all();

        $this->render('admin.listproduct', ['products' => $products]);
    }

    //Hiển thị view addproduct
    public function add()
    {
        $categories = CategoryModel::all();
        $this->render('admin.addproduct', compact('categories'));
    }

    //Lưu dữ liệu khi thêm vào csdl
    public function store()
    {
        $data = $_POST; //Lấy dữ liệu từ form POST

        //Thêm ảnh
        $file = $_FILES['image'];
        //Lấy tên ảnh
        $image_name = $file['name'];
        //Upload
        move_uploaded_file($file["tmp_name"], "images/" . $image_name);

        //Add vào mảng data
        $data['image'] = $image_name;

        ProductModel::insert($data);
        header("location: " . BASE_URL . "admin/product");
        die;
    }
}
