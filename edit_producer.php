<?php
$con = new mysqli("localhost", "root", "", "cuocdoidangcay");
if ($con->connect_errno) {
    die("connection error");
}
$id=$_GET["id"];
$sql = "SELECT * FROM producers WHERE id=$id";
$result = $con->query($sql);
$objn=null;
if($result->num_rows >0) {
    while ($row = $result->fetch_assoc()) {
        $objn=$row;
    }
}
?>
    <form action="update_producer.php" method="post">
        <h3>Sửa tên tác giả</h3>
        <input type="text" name="id" value="<?php echo $objn['id']; ?>" />
        <div class="mb-3 mt-3">
            <label for="producerName">Tên tác giả</label>
            <input type="text" class="form-control form-control-sm" name="producerName" value="<?php echo $objn['name'];?>" id="producerName">

        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
    </form>
<?php