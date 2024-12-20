<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
<?php session_start() ?>
<?php
$id=$_GET["id"];


$con = new mysqli("localhost", "root", "", "cuocdoidangcay");
if ($con->connect_errno) {
    die("connection error");
} $sql = "SELECT books.id as id,books.name as product_name,books.quantity,books.price,books.description,books.image,categories.name as category_name,producers.name as producer_name
            FROM books  
            LEFT JOIN categories  ON books.category_id=categories.id 
            LEFT JOIN producers  ON books.producer_id=producers.id
            Where books.id=$id";
$result = $con->query($sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/all.css">
<link rel="stylesheet" href="card.css">

<div class="container" >
        <?php
        if($result!== false && $result->num_rows >0) {
            while ($row = $result->fetch_assoc()) {
                echo ' <div class="card" style="width:400px">';

                echo"<p><img class='card-img-top' src='image/" .$row["image"] . "' alt='' ></p>";

                echo ' <div class="card-body" >';
                echo '<h4 class="card-title" style="height: 50px;font-family: Arial;font-size: small">'.$row["product_name"].'</h4>';
                echo '<p class="card-text" style="font-size: small;border-style: groove">Giá tiền: '.number_format($row["price"], 0, ".", ".").' vnđ</p>';
                echo '<div style="border-style: outset;height: 150px">';
                echo '<p class="card-text"style="font-family: Arial;font-size: smaller">Số Lượng: '.$row["quantity"].'</p>';
                echo '<p class="card-text"style="font-family: Arial;font-size: smaller">Mô tả: '.$row["description"].'</p>';
                echo '<p class="card-text"style="font-family: Arial;font-size: smaller">Chất Liệu: '.$row["producer_name"].'</p>';
                echo '<p class="card-text"style="font-family: Arial;font-size: smaller">Màu: '.$row["category_name"].'</p>';
                echo '</div>';
//                echo '<form action="add_to_cart.php" method="get">';
//                echo '<input class="form-control form-control-sm" name="id"  id="id" value="">';
//                echo '<label for="quantity">Số lượng</label>';
//                echo '<input type="number" class="form-control form-control-sm" name="quantity"  id="quantity">';
//                echo '<a href="add_to_cart.php?id='.$row["id"].'"class="btn btn-info" style="margin-top: 10px">Thêm vào giỏ hàng</a>';
//
//                echo '</div>';
//                echo '</div>';
            }
        }
        ?>
</div>
        <form action="add_to_cart.php" method="get" >
            <input type="text" name="id" class="btn btn-check" value="<?php echo $id; ?>" />
            <div class="mb-3 mt-3">
                <label for="quantity">Số lượng</label>
                <input type="text" class="form-control form-control-sm" name="quantity" required  id="quantity">

            </div>
            <div class="mb-3 mt-3">
                <button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>
            </div>

</body>
</html>
