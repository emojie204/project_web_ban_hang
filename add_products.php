<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm Thể Loại</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
<div class="container">
    <h3 class="text-primary">Thêm sản phẩm</h3>

    <form action="save_products.php" method="post" enctype="multipart/form-data">
        <div class="mb-3 mt-3">
        <label for="productName" class="form-label">Tên sản phẩm</label>
        <input type="text"required class="form-control" name="productName" id="productName">
        <label for="price" class="form-label">Giá</label>
        <input type="number"required pattern="[0-9]*" class="form-control" name="price" id="price">
            <label><small class="text-secondary fst-italic">Chỉ được nhập số</small></label><br>
        <label for="quantity"class="form-label">Số lượng</label>
        <input type="number"required class="form-control" name="quantity" id="quantity">
            <label><small class="text-secondary fst-italic">Chỉ được nhập số</small></label><br>
        <label for="image" class="form-label">Ảnh</label>
        <input type="file"required class="form-control" name="image" id="image">
        <label for="description" class="form-label">Mô tả</label>
        <input type="text"required class="form-control" name="description" id="description">
        <label for="producer_name" class="form-label">Chất liệu</label>
        <input type="text"required class="form-control" name="producer_id" id="producer_name">
        <label for="category_name" class="form-label">Màu</label>
        <input type="text"required class="form-control" name="category_id" id="category_name">
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
</div>
</body>
</html>
<?php

