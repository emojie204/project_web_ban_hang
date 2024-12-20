<?php
$con = new mysqli("localhost", "root", "", "cuocdoidangcay");
if ($con->connect_errno) {
    die("connection error");
}
$id=$_GET["id"];
$sql = "SELECT * FROM books WHERE id=$id";
$result = $con->query($sql);
$objn=null;
if($result->num_rows >0) {
    while ($row = $result->fetch_assoc()) {
         $objn=$row;
    }
}
?>
    <form action="update_product.php" method="post" enctype="multipart/form-data">
        <h3>Sửa sản phẩm</h3>
        <input type="text" name="id" value="<?php echo $objn['id']; ?>" />
        <div class="mb-3 mt-3">
            <label for="productName">Tên sản phẩm</label>
            <input type="text" class="form-control form-control-sm" name="productName" value="<?php echo $objn['name'];?>" id="productName">

        </div>
        <div class="mb-3 mt-3">
            <label for="quantity">Số lượng</label>
            <input type="text" class="form-control form-control-sm" name="quantity" value="<?php echo $objn['quantity'];?>" id="quantity">

        </div>
        <div class="mb-3 mt-3">
            <label for="price">Giá</label>
            <input type="text" class="form-control form-control-sm" name="price" value="<?php echo $objn['price'];?>" id="price">

        </div>
        <div class="mb-3 mt-3">
            <label for="description">Mô tả</label>
            <input type="text" class="form-control form-control-sm" name="description" value="<?php echo $objn['description'];?>" id="description">

        </div>
        <div class="mb-3 mt-3">
            <label for="category_id">Màu</label>
            <input type="text" class="form-control form-control-sm" name="category_id" value="<?php echo $objn['category_id'];?>" id="category_id">

        </div>
        <div class="mb-3 mt-3">
            <label for="producer_id">Chất liệu</label>
            <input type="text" class="form-control form-control-sm" name="producer_id" value="<?php echo $objn['producer_id'];?>" id="producer_id">

        </div>
        <div class="mb-3 mt-3">
            <label for="image">Ảnh minh họa</label>
            <input type="file" class="form-control form-control-sm" name="image" value="<?php echo $objn['image'];?>" id="image">

        </div>
        <div class="mb-3 mt-3">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
