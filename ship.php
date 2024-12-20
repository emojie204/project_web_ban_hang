<?php

$con = new mysqli("localhost", "root", "", "cuocdoidangcay");
if ($con->connect_errno) {
    die("connection error");
}
$id = $_GET["id"];
$sql = "UPDATE orders SET status = 'SHIPPING' WHERE id=$id";
$con->query($sql);
header("location:status_book.php");