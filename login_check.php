
<?php

    $con = new mysqli("localhost", "root", "", "cuocdoidangcay");
    $password = $_POST['password'];
    $username = $_POST['username'];

    $sql = "select * from customers where name='$username' and password='$password'";

    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        session_start();
        while ($row = $result->fetch_assoc()) {

            $_SESSION["name"] = $row["name"];
        }


        header("location:index_home.php");
    } else {
        header("location:login.php?msg=error");

    }
//    echo"<pre>";
//    var_export($name);
//    echo"</pre>";
