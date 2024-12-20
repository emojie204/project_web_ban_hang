<?php
$con = new mysqli("localhost", "root", "", "cuocdoidangcay");
if ($con->connect_errno) {
    die("connection error");
}
$id = $_POST['id'];
$categoryname = $_POST["categoryName"];
$sql = "Update  categories SET name='$categoryname'WHERE id=$id";
$con->query($sql);
header("location:san_pham.php");
