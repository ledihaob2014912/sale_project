<?php
   require_once 'database.php';

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
</section>
        <!-- Mat hang -->
        <section id="featured" class="my-1 pb-5">
    <div class="container text-center mt-5 py-1">
        <h3>SẢN PHẨM</h3>
        <hr class="mx-auto">
        <p>Bộ sưu tập mùa hè năng động</p>
    </div>
    <div class="d-flex flex-row justify-content-center">
    <?php
        $query = mysqli_query($connect, "SELECT * FROM products");
        while ($row = mysqli_fetch_assoc($query)) {
        ?>
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="img/product/product1/<?php echo $row['image']; ?>" alt="">
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name"><?php echo $row['product_name'] ?></h5>
            <h4 class="p-price"><?php echo $row['price'] ?></h4>
            <a class="btn btn-warning" href="edit.php?id=<?php echo $row['product_id']; ?>">Sửa</a>

        </div>                
        <?php 
        }
        ?>
    </div>
</section>