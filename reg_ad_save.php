<?php


$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];

$con = new mysqli("localhost", "root", "", "cuocdoidangcay");


$insert_admin    = "INSERT INTO admins (name, password,email) VALUES ('$username', '$password','$email')";

$con->query($insert_admin);
//    echo"<pre>";
//    var_export($insert_admin);
//    var_export($insert_customer);
//    echo"</pre>";
echo"Đăng kí thành công";
echo"<br>";
echo"<a href='home.php' >Quay về trang chủ</a>";
?>
