<?php

$con = new mysqli("localhost", "root", "", "cuocdoidangcay");
$password = $_POST['password'];
$username = $_POST['username'];

$sql = "select * from admins where name='$username' and password='$password'";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
    }
    header("location:san_pham.php");
} else {
    header("location:login_ad.php?msg=error");
}
