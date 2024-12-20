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
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>BookName</td>
                <td>Quantity</td>
                <td>Phone</td>
                <td>Address</td>
                <td>Date</td>
                <td>Status</td>
            </tr>
        </thead>
        <?php
        $con = new mysqli("localhost", "root", "", "cuocdoidangcay");
        if ($con->connect_errno) {
            die("connection error");
        }
        $id_ord = $_GET['id'];
        $sql = "	SELECT order_details.quantity,orders.id,orders.`order_name` AS ordername,orders.address,orders.phone,orders.`status`,orders.date_buy,books.`name` AS bookname
                FROM order_details 
                INNER JOIN orders
                ON order_details.order_id=orders.id
                INNER JOIN books
                ON order_details.book_id=books.id
                where orders.id=$id_ord";
        $result = $con->query($sql);
        if ($result !== false && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";

                echo "<td>" . $row["id"] . "</td>";

                echo "<td>" . $row["ordername"] . "</td>";
                echo "<td>" . $row["bookname"] . "</td>";
                echo "<td>" . $row["quantity"] . "</td>";
                echo "<td>" . $row["phone"] . "</td>";
                echo "<td>" . $row["address"] . "</td>";
                echo "<td>" . $row["date_buy"] . "</td>";
                echo "<td>" . $row["status"] . "</td>";
                echo "</tr>";
            }
        }

        ?>
    </table>
    <?php
    $con = new mysqli("localhost", "root", "", "cuocdoidangcay");
    if ($con->connect_errno) {
        die("connection error");
    }
    $id = $_GET["id"];
    $sql = "SELECT id,status FROM orders WHERE id=$id";
    $result = $con->query($sql);
    $objn = null;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $objn = $row;
        }
    }
    ?>
    <form>
        <h3>Trạng thái đơn hàng</h3>
        <input type="text" name="id" value="<?php echo $objn['id']; ?>" />
        <div class="mb-3 mt-3">
            <label for="status">Trạng thái</label>
            <input type="button" style="display: block;float: left;" class="form-control form-control-sm" name="status" value="<?php echo $objn['status']; ?>" id="status">
        </div>
        </div>
    </form>
    <?php
    if ($objn["status"] == "SHIPPING") {
        echo '<button disabled style="font-family: Arial;font-size: smaller" >ACCEPTED</button>';
        echo '<button disabled style="font-family: Arial;font-size: smaller" >SHIPPING</button>';
        echo "<a href='receive.php?id=" . $objn['id'] . "' class='btn btn-info'style='font-family: Arial;font-size: smaller'>RECEIVED</a>";
        echo '<button disabled style="font-family: Arial;font-size: smaller" >CANCEL</button>';
    } else if ($objn["status"] == "PENDING") {
        echo '<button disabled style="font-family: Arial;font-size: smaller" >ACCEPT</button>';
        echo '<button disabled style="font-family: Arial;font-size: smaller" >SHIPPING</button>';
        echo '<button disabled style="font-family: Arial;font-size: smaller" >RECEIVED</button>';
        echo "<a href='delete.php?id=" . $objn['id'] . "' class='btn btn-info'style='font-family: Arial;font-size: smaller'>CANCEL</a>";
    }

    ?>


</body>

</html>