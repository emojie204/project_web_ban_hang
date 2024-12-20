<?php
    $con = new mysqli("localhost", "root", "", "cuocdoidangcay");
    if ($con->connect_errno) {
        die("connection error");

    }
    $ids=$_POST["ids"];
    $fullname=$_POST["fullName"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
    date_default_timezone_set("Asia/Bangkok");
    $dateBuy=date("Y-m-d H:i:s");
    $sql= "INSERT INTO orders(order_name,date_buy,phone,address,status)values('$fullname','$dateBuy','$phone','$address','PENDING') ";
//    $con->query($sql);
    if ($con->query($sql) === TRUE) {
    $last_id = $con->insert_id;}
    $arrId=explode(",",$ids);
    $sql1= "";
    $sql1 .= " INSERT INTO order_details (book_id,order_id,quantity) ";
    $sql1 .= " values ";
    for($i=0 ; $i < count($arrId) ; $i++){
        if($i != count($arrId) - 1){
            $sql1 .= "(".$arrId[$i].",$last_id,1),";
        }
        else{
            $sql1 .= "(".$arrId[$i].",$last_id,1)";
        }
    }
    $con->query($sql1);

    echo"Đặt Hàng Thành công";
    ?>
<div><a href="index_home.php" class="btn btn-warning">Quay về trang chủ </a></div>