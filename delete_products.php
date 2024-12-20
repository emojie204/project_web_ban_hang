<?php
$con = new mysqli("localhost", "root", "", "cuocdoidangcay");
if ($con->connect_errno) {
    die("connection error");

}


$id = $_GET["id"];

$sql = "DELETE FROM books WHERE id = $id";
$con->query($sql);

header("Location: san_pham.php");
