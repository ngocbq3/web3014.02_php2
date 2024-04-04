<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm sản phẩm</title>
</head>
<body>
    <h2>Thêm sản phẩm</h2>
    <form action="" method="post" enctype="multipart/form-data">
        Tên sản phẩm: <input type="text" name="name" id="">
        <br>
        Nhập ảnh: <input type="file" name="image" id=""> <br>
        Danh mục: 
        <select name="cate_id" id="">
            @foreach($categories as $cate)
                <option value="{{ $cate->id }}">
                    {{ $cate->cate_name }}
                </option>
            @endforeach
        </select> <br>
        Giá: <input type="number" name="price" id=""> <br>
        Mô tả ngắn:
        <textarea name="short_desc" id="" cols="99" rows="5"></textarea> <br>
        Chi tiết:
        <textarea name="detail" id="" cols="99" rows="10"></textarea>
        <br>
        <button type="submit">Thêm mới</button>

    </form>
</body>
</html>