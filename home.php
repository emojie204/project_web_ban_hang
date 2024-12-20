<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
<header>
    <div style="background-color: darkgray;height: 71px;margin-top: 0px">
        <div class="row">
            <div class="col-md-12">
                <h4 style="text-align: center;font-family: 'Candara Light'">LELO|lelo@email.com.vn</h4>
            </div>
        </div>
    </div>
</header>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php">Trang chủ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <form class="d-flex">
                <input class="form-control me-2" type="text" placeholder="Search">
                <button class="btn btn-primary btn-sm" type="button">Tìm kiếm</button>
            </form>
            <ul class="navbar-nav me-auto">
                <li class="nav-item" >
                    <a class="nav-link" href="register.php">Đăng Ký</a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link" href="login.php">Đăng Nhập</a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link" href="login_ad.php">Chức năng cho admin</a>
                </li>

            </ul>

        </div>
    </div>
</nav>
<div class="container">
    <img src="background.jpg" alt="" width="1300" height="500">
</div>
<?php
$con = new mysqli("localhost", "root", "", "cuocdoidangcay");
if ($con->connect_errno) {
    die("connection error");
}
$page=null;
if(isset($_GET["page"])){

    $page=$_GET["page"];
}
?>

<div class="container">
    <?php


    if($page==null) {
        require_once("trangchu.php");
    }else if($page=="trangchu.php") {
        require_once("san_pham.php");
    }else if($page=="add_products.php") {
        require_once("add_products.php");
    }else if($page=="delete_book.php") {
        require_once("delete_products.php");
    }else if($page=="product_view.php") {
        require_once("product_view.php");
    }else if($page=="register.php") {
        require_once("register.php");
    }

    ?>
</div>
<div style="font-family: Arial;border-style: groove">
    <footer>
        <address>
            Visit us at : 999 Le Thanh Nghi<br>
            Email : Buivanan07122004@gmail.com<br>
            Address : Tang 2 toa a17 Ta Quang Buu<br>
            Hanoi
        </address>
        <p>Contact us :<a href="mailto:hege@example.com">Buivanan07122004@gmail.com</a></p>
    </footer>

</div>
</body>
</html>



