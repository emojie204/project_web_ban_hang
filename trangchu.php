<?php
        $con = new mysqli("localhost", "root", "", "cuocdoidangcay");
        if ($con->connect_errno) {
            die("connection error");
        } $sql = "SELECT books.id as id,books.name as product_name,books.quantity,books.price,books.description,books.image,categories.name as category_name,producers.name as producer_name
            FROM books  
            LEFT JOIN categories  ON books.category_id=categories.id 
            LEFT JOIN producers  ON books.producer_id=producers.id
            ORDER BY books.id ASC";
        $result = $con->query($sql);
                ?>

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/all.css">
<link rel="stylesheet" href="card.css">

                                <div class="container " style="margin-top: 50px;">
                                    <div class="row">
                                  <?php
                                    if($result->num_rows>0) {
                                        while ($row = $result->fetch_assoc()) {

                                            echo '<div class="col-md-3 ">';

                                             echo ' <div class="card" style="height: 650px;margin-bottom: 20px">';

                                            echo"<p><img class='card-img-top' src='image/" .$row["image"] . "' alt='' style='width: 100%;height: 300px'></p>";

                                            echo ' <div class="card-body" >';
                                            echo '<h4 class="card-title" style="height: 50px;font-family: Arial;font-size: small">'.$row["product_name"].'</h4>';
                                            echo '<p class="card-text" style="font-size: small;border-style: groove">Giá tiền: '.$row["price"].' vnđ</p>';
                                            echo '<div style="border-style: outset;height: 150px">';
                                            echo '<p class="card-text"style="font-family: Arial;font-size: smaller">Số Lượng: '.$row["quantity"].'</p>';
                                            echo '<p class="card-text"style="font-family: Arial;font-size: smaller">Mô tả: '.$row["description"].'</p>';
                                            echo '<p class="card-text"style="font-family: Arial;font-size: smaller">Chất liệu: '.$row["producer_name"].'</p>';
                                            echo '<p class="card-text"style="font-family: Arial;font-size: smaller">Màu: '.$row["category_name"].'</p>';
                                            echo '</div>';
                                            echo '<a href="product_view.php?id='.$row["id"].'"class="btn btn-primary" style="margin-top: 10px">Xem chi tiết</a>';

                                            echo '</div>';
                                            echo '</div>';
                                            echo '</div>';
                                        }
                                    }
                                    ?>
                                        </div>
                                    </div>

