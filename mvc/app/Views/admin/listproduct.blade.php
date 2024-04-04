<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <h2>Danh sách sản phẩm</h2>
    <table border="1">
        <tr>
            <th>#ID</th>
            <th>Tên Sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
            <th>Mô tả ngắn</th>
            <th>
                <a href="{{ BASE_URL . 'admin/product/add' }}">Thêm mới</a>
            </th>
        </tr>

        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>
                    <img src="{{ BASE_URL .'images/'. $product->image }}" width="90" alt="">
                </td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->short_desc }}</td>
                <td>
                    Sửa / Xóa
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>