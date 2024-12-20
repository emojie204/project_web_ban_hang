<?php

$con = new mysqli("localhost", "root", "", "cuocdoidangcay");
if ($con->connect_errno) {
    die("connection error");
}
$id = $_GET['id'];

$sql = "delete from categories WHERE id=$id";


header("location:list_category.php");

