<?php
    require_once 'database.php';

    $id = $_GET['id'];
    $query = mysqli_query($connect, "SELECT * FROM products WHERE product_id = $id");
    $product = mysqli_fetch_assoc($query);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diversion Trang Chủ</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <script src="https://kit.fontawesome.com/b76b24adf8.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">

</head>
<body>
    <form method="post" action="update.php">
        <input type="hidden" name="id" value="<?php echo $product['product_id']; ?>">
        <div class="form-group">
            <label>Tên sản phẩm</label>
            <input type="text" name="product_name" class="form-control" value="<?php echo $product['product_name']; ?>">
        </div>
        <div class="form-group">
            <label>Giá sản phẩm</label>
            <input type="text" name="price" class="form-control" value="<?php echo $product['price']; ?>">
        </div>
        <div class="form-group">
            <label>Hình ảnh sản phẩm</label>
            <input type="text" name="image" class="form-control" value="<?php echo $product['image']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</body>