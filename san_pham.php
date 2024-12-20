<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
<h3>Product</h3>
Thêm sản phẩm : <a href="index_home.php?page=add_products.php"><i class="fa-solid fa-circle-plus text-success"></i></a><br>
Thêm màu : <a href="add_category.php"><i class="fa-solid fa-circle-plus text-success"></i></a><br>
Thêm chất liệu : <a href="add_producer.php"><i class="fa-solid fa-circle-plus text-success"></i></a>
<div><a href="list_category.php" class="btn btn-primary">Xem danh sách màu </a></div>
<div><a href="list_producer.php" class="btn btn-warning">Xem danh sách chất liệu </a></div>
<div><a href="status_book.php" class="btn btn-success">Trạng thái đơn hàng</a></div>
<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <td>ID</td>
        <td>Tên sản phẩm</td>
        <td>Giá</td>
        <td>Số lượng</td>
        <td>Ảnh minh họa</td>
        <td>Mô tả</td>
        <td>Chất liệu</td>
        <td>Màu</td>
        <td></td>
        <td></td>
        <td></td>

    </tr>
    </thead>
    <tbody>
    <?php

    $con = new mysqli("localhost", "root", "", "cuocdoidangcay");
    if ($con->connect_errno) {
        die("connection error");
    }
    $sql = "SELECT books.id as id,books.name as product_name,books.quantity,books.price,books.description,books.image,categories.name as category_name,producers.name as producer_name
            FROM books  
            LEFT JOIN categories  ON books.category_id=categories.id 
            LEFT JOIN producers  ON books.producer_id=producers.id
            ORDER BY books.id ASC";
//    echo"<pre>";
//    var_export($sql);
//    echo"</pre>";
    $result = $con->query($sql);
    if($result!== false && $result->num_rows >0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo"<td>".$row["id"]."</td>";

            echo"<td>".$row["product_name"]."</td>";

            echo"<td>".$row["price"]."</td>";

            echo"<td>".$row["quantity"]."</td>";

            echo "<td><p><img class='card-img-top' src='image/" .$row["image"] . "' alt='' style='width: 25%'></p></td>";

            echo"<td>".$row["description"]."</td>";

            echo"<td>".$row["producer_name"]."</td>";

            echo"<td>".$row["category_name"]."</td>";

            echo"<td><a href='edit_products.php?id=".$row['id']."'><i class='fa-regular fa-pen-to-square'></i></a></td>";

            echo"<td><a href='delete_products.php?id=".$row['id']."'><i class='fa-regular fa-trash-can text-danger'></i></a></td>";
            echo"<td></td>";
            echo "</tr>";

        }
    }
    ?>
    </tbody>
</table>
<a href="home.php" class="btn btn-success">Về trang chủ</a>
</body>
</html>

