<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
</head>
    <body>
    <table class="table table-bordered table-striped">
    <thead>
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Sửa</td>
        <td>Xóa</td>
    </tr>
    </thead>
        <?php
            $con = new mysqli("localhost", "root", "", "cuocdoidangcay");
        if ($con->connect_errno) {
        die("connection error");
        }
        $sql="select * from categories ";
         $result = $con->query($sql);
        if($result!== false && $result->num_rows >0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";

                echo "<td>" . $row["id"] . "</td>";

                echo "<td>" . $row["name"] . "</td>";

                echo"<td><a href='edit_category.php?id=".$row['id']."'><i class='fa-regular fa-pen-to-square'></i></a></td>";
                echo"<td><a href='delete_category.php?id=".$row['id']."'><i class='fa-regular fa-trash-can text-danger'></i></a></td>";

                echo "</tr>";
            }
        }

        ?>
        </table>
    </body>
</html>