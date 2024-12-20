<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đăng Ký</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>

<div class="container mt-3" >
    <h2>Sign up</h2>
    <form action="register_save.php" method="post">
        <div class="mb-3">
            <label for="name">Full Name:</label>
            <input type="text" class="form-control" id="username" required placeholder="Enter full name" name="fullname">
        </div>

        <div class="mb-3">
            <label for="user">User Name:</label>
            <input type="text" class="form-control" id="fullname" required placeholder="Username" name="username">
        </div>

        <div class="mb-3">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="password" required placeholder="Password" name="password">
        </div>

        <div class="mb-3 mt-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" required placeholder="Enter email" name="email">
        </div>

        <div class="mb-3">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" id="phone" required placeholder="Enter Phone" name="phone">
        </div>

        <div class="mb-3">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" required placeholder="Enter Address" name="address">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>

<?php
