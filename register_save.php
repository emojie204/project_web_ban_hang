
<?php


        $email = $_POST['email'];
        $password = $_POST['password'];
        $full_name = $_POST['fullname'];
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        $con = new mysqli("localhost", "root", "", "cuocdoidangcay");


        $insert_customer = "INSERT INTO customers (email, password, fullname,name, phone,address)
                            VALUES ('$email', '$password', '$full_name', '$username', '$phone', '$address')";


        $con->query($insert_customer);
//    echo"<pre>";
//    var_export($insert_admin);
//    var_export($insert_customer);
//    echo"</pre>";
        echo"Đăng kí thành công";
        echo"<br>";
        echo"<a href='home.php' >Quay về trang chủ</a>";
        ?>


