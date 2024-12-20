<?php
$con = new mysqli("localhost", "root", "", "cuocdoidangcay");
if ($con->connect_errno) {
    die("connection error");
}
$id = $_POST['id'];
$producername = $_POST["producerName"];
$sql = "Update  producers SET name='$producername'WHERE id=$id";
$con->query($sql);
header("location:san_pham.php");
