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
        $message = $_GET['message'] ?? '';
        $this->render('admin.listproduct', ['products' => $products, 'message' => $message]);
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

    public function edit($id)
    {
        $product = ProductModel::find($id);
        $categories = CategoryModel::all();

        $this->render(
            'admin.editproduct',
            compact('product', 'categories')
        );
    }
    public function update($id)
    {
        $data = $_POST;

        $file = $_FILES['image'];
        //kiểm tra xem có ảnh không
        if ($file['size'] > 0) {
            $image = $file['name']; //lấy tên ảnh
            $data['image'] = $image; //thêm ảnh vào mảng data
            //upload ảnh
            move_uploaded_file($file['tmp_name'], "images/" . $image);
        }

        ProductModel::update($data['id'], $data);

        $product = ProductModel::find($data['id']);
        $categories = CategoryModel::all();
        $message = "Cập nhật dữ liệu thành công";
        $this->render(
            'admin.editproduct',
            compact('product', 'categories', 'message')
        );
    }

    public function delete($id)
    {
        ProductModel::delete($id);
        $message = "Xóa dữ liệu thành công";
        header("location: " . BASE_URL . 'admin/product?message=' . $message);
        die;
    }
}
