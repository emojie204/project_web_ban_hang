<?php
    $con = new mysqli("localhost", "root", "", "cuocdoidangcay");
    if ($con->connect_errno) {
        die("connection error");

    }
    $categoryName=$_POST["category"];
    $sql = "INSERT INTO categories(name) 
        values('$categoryName') ";
    $con->query($sql);
    header("location:san_pham.php");