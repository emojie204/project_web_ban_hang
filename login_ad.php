
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đăng Nhập</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>

<div class="container mt-3">
    <h2>Login</h2>
    <?php
    if(isset ($_GET["msg"])){

    }?>
    <form action="login_ad_check.php" method="post">
        <div class="mb-3 mt-3">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" required placeholder="Enter username" name="username">
        </div>
        <div class="mb-3">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" required placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Đăng nhập</button>
    </form>
    Chưa có tài khoản ? <a href='reg-ad.php' class="btn btn-success">Đăng ký</a>
</div>

</body>
</html>
<?php