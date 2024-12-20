    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <div class="container">
        <h3 class="text-primary">Thêm Thể Loại</h3>

        <form action="save_category.php" method="post">
            <div class="mb-3 mt-3">
                <label for="category" class="form-label">Tên thể loại</label>
                <input type="text"required class="form-control" name="category" id="category"><br>
                <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
    </body>
    </html>
