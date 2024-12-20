    <?php
    $con = new mysqli("localhost", "root", "", "cuocdoidangcay");
    if ($con->connect_errno) {
        die("connection error");

    }
    $producerName=$_POST["producer"];
    $sql = "INSERT INTO producers(name) 
            values('$producerName') ";
    $con->query($sql);
    header("location:san_pham.php");
