<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cập nhật sản phẩm</title>
</head>
<body>
    <h2>Cập nhật sản phẩm</h2>
    <div>
        {{ $message??'' }}
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        Tên sản phẩm: <input type="text" name="name" value="{{ $product->name }}">
        <br>
        <img src="{{ BASE_URL . 'images/' . $product->image }}" width="90" alt="{{ $product->name }}">
        <br>
        Nhập ảnh: <input type="file" name="image" id=""> <br>
        Danh mục: 
        <select name="cate_id" id="">
            @foreach($categories as $cate)
                <option value="{{ $cate->id }}" {{ $cate->id == $product->cate_id ? 'selected' : '' }}>
                    {{ $cate->cate_name }}
                </option>
            @endforeach
        </select> <br>
        Giá: <input type="number" name="price" value="{{ $product->price }}"> <br>
        Mô tả ngắn:
        <textarea name="short_desc" id="" cols="99" rows="5">{{ $product->short_desc }}</textarea> <br>
        Chi tiết:
        <textarea name="detail" id="" cols="99" rows="10">{{ $product->detail }}</textarea>
        <input type="hidden" name="id" value="{{ $product->id }}">
        <br>
        <button type="submit">Thêm mới</button>

    </form>
</body>
</html>