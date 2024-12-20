    <?php
    ob_start();
    session_start();
    $id=$_GET["id"];
    echo "$id";
    die();
    $_SESSION["cart"][$id]=[];
    header("Location: show_cart.php");
    ob_end_clean();
    ?>
