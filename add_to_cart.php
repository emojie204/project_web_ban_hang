
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/all.css">
<link rel="stylesheet" href="card.css">
<?php session_start() ?>
<?php


    $con = new mysqli("localhost", "root", "", "cuocdoidangcay");
    if ($con->connect_errno) {
        die("connection error");
    }
    $quantity=$_GET["quantity"];
    $id = $_GET["id"];
    $sql = "SELECT books.id as id,books.name as product_name,books.quantity,books.price,books.description,books.image,categories.name as category_name,producers.name as producer_name
                FROM books  
                LEFT JOIN categories  ON books.category_id=categories.id 
                LEFT JOIN producers  ON books.producer_id=producers.id
                Where books.id=$id";
    $result = $con->query($sql);
    $obj = null;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $obj = $row;
        }
    }$obj["quantity"]=$quantity;
    $_SESSION["cart"][$obj["id"]]=$obj;
    echo "Thêm vào giỏ hàng thành công !";
    echo '<div>';
    echo '<a href="index_home.php"class="btn btn-info" style="margin-top: 10px">Quay về trang chủ</a>';
    echo '</div>';

