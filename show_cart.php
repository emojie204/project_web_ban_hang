    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="card.css">
    <script src="js/jquery.min.js"></script>

    <?php
    session_start();
    $carts = $_SESSION["cart"]
    ?>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>ProductName</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Description</td>
                <td>Thể loại</td>
                <td>Tác giả</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $total = 0;
            $con = new mysqli("localhost", "root", "", "cuocdoidangcay");
            if ($con->connect_errno) {
                die("connection error");
            }
            if (count($carts) > 0) {
                foreach ($carts as $row) {
                    $total += $row["price"] * $row["quantity"];
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["product_name"] . "</td>";
                    echo "<td>" . number_format($row["price"], 0, ".", ".") . "</td>";
                    echo "<td>" . $row["quantity"] . "</td>";
                    echo "<td>" . $row["description"] . "</td>";
                    echo "<td>" . $row["category_name"] . "</td>";
                    echo "<td>" . $row["producer_name"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "Giỏ hàng trống";
            }
            ?>
        </tbody>
    </table>

    <h3>Tổng tiền: <?php echo number_format($total); ?> vnđ</h3>
    <a href="cart_delete.php" class="btn btn-danger">Xóa tất cả giỏ hàng</a>
    <a href="index_home.php" class="btn btn-success">Quay về trang chủ</a>
    <div class="container">
        <form action="order_save.php" method="post">
            <?php if ($carts != null) {
                foreach ($carts as $cart) {
                    echo '<input type="text" name="id" class="btn btn-check" value="' . $cart["id"] . '" >';
                }
            }

            ?>
            <br>
            <div class="container">
                <div class="a">
                    Đơn Hàng:
                    <input type="text" name="ids" id="ids" value="">
                </div>
                <div class="a">
                    Tên người nhận: <input type="text" required name="fullName">
                </div>
                <div class="a">
                    Số Điện Thoại: <input type="text" required name="phone">
                </div>
                <div class="a">
                    Địa chỉ<input type="text" required name="address">
                </div>

                <div class="a">
                    <button type="submit" id="order" class="btn bg-info btn-sm">Đặt hàng</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        $(function() {
            $("#order").click(function() {
                var ids = new Array();
                $("input[name=id]").each(function() {
                    ids.push($(this).val());
                });
                $("#ids").val(ids);
                // location.href="order_save.php?ids="+ids;
            });
        })
    </script>
    <?php

    ?>