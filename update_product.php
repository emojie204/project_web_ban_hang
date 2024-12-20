<?php


        $con = new mysqli("localhost", "root", "", "cuocdoidangcay");
        if ($con->connect_errno) {
            die("connection error");
        }
        $id = $_POST['id'];
        $product_name = $_POST["productName"];
        $price = $_POST["price"];
        $quantity = $_POST["quantity"];
        $description=$_POST["description"];
        $category_id=$_POST["category_id"];
        $producer_id=$_POST["producer_id"];
        $file = $_FILES["image"];

        $fileName = $file["name"];

        $fileNameInfo = pathinfo($fileName);

        $fileNameEnd = $fileNameInfo["filename"] . "_" . date("Y_m_d_H_i_s") . "." . $fileNameInfo["extension"];

        $fileupload = "C://xampp/htdocs/project_web_ban_hang/image/".$fileNameEnd;

        move_uploaded_file($file["tmp_name"], $fileupload);

        $sql = "Update  books SET name='$product_name',quantity=$quantity,price=$price,description='$description',category_id=$category_id,producer_id=$producer_id,image='$fileNameEnd' WHERE id=$id";




        $con->query($sql);
        header("location:san_pham.php");