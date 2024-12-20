<?php


$con = new mysqli("localhost", "root", "", "cuocdoidangcay");
if ($con->connect_errno) {
    die("connection error");
}
$id = $_GET["id"];
$sql = "delete from order_details WHERE order_id=$id";
$sql2 = "delete from orders where id=$id";
$con->query($sql);
$con->query($sql2);
header("location:change_status.php");