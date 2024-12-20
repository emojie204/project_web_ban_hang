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

    </header>
    <h6>Xin chào
        <?php
        session_start();
        $name = $_SESSION["name"];
        echo "$name"
        ?>
    </h6>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index_home.php">Trang chủ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-primary btn-sm" type="button">Tìm kiếm</button>
                </form>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="show_cart.php">Xem Giỏ Hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="status_cus.php">Trạng thái đơn hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Đăng xuất</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav><?php
            $con = new mysqli("localhost", "root", "", "cuocdoidangcay");
            if ($con->connect_errno) {
                die("connection error");
            }
            $page = null;
            if (isset($_GET["page"])) {

                $page = $_GET["page"];
            }
            ?>

    <div class="container">
        <?php


        if ($page == null) {
            require_once("trangchu.php");
        } else if ($page == "trangchu.php") {
            require_once("san_pham.php");
        } else if ($page == "add_products.php") {
            require_once("add_products.php");
        } else if ($page == "delete_book.php") {
            require_once("delete_products.php");
        } else if ($page == "product_view.php") {
            require_once("product_view.php");
        } else if ($page == "register.php") {
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