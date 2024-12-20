<?php

    $con = new mysqli("localhost", "root", "", "cuocdoidangcay");
    if ($con->connect_errno) {
        die("connection error");

    }$file = $_FILES["image"];

    $fileName = $file["name"];

    $fileNameInfo = pathinfo($fileName);

    $fileNameEnd = $fileNameInfo["filename"] . "_" . date("Y_m_d_H_i_s") . "." . $fileNameInfo["extension"];

    $fileupload = "C://xampp/htdocs/project_web_ban_hang/image/".$fileNameEnd;

    move_uploaded_file($file["tmp_name"], $fileupload);


    $product_name = $_POST["productName"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];
    $description=$_POST["description"];
    $category_id=$_POST["category_id"];
    $producer_id=$_POST["producer_id"];
    $sql = "INSERT INTO books(name,quantity,price,description,category_id,producer_id,image) 
    values('$product_name','$quantity','$price','$description','$category_id','$producer_id','$fileNameEnd') ";
//    echo"<pre>";
//    var_export($sql);
//    echo"</pre>";
//    die();
    $con->query($sql);
    header("location:san_pham.php");