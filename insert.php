<?php
   require_once 'database.php';

   if(isset($_POST['sbm'])){
    $product_name = $_POST['product_name'];

    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $brand_id = $_POST['brand'];

    $sql = "INSERT INTO products(product_name, image, price, quantity, brand) VALUES('$product_name','$image',$price,$quantity,'$brand_id')" ;
    //  echo $sql; exit;
     $query = mysqli_query($connect,$sql);
     move_uploaded_file($image_tmp,'img/'.$image);
   }
   
?>
<!DOCTYPE html>
<html lang="en">

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

    <link rel="stylesheet" href="css/style.css">

</head>
<div class="container-fluid">
    <div class="card">
        <div class="row card-header">
            <h2>ADD PRODUCT</h2>
        </div>
    <div class="row card-body">
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Product name</label>
                <input type="text" name="product name" class="form-control" required> 
            </div>

            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="">Product price</label>
                <input type="number" name="price" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="">Quantity</label>
                <input type="number" name="quantity" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="">Brand</label>
                <input type="text" name="brand" class="form-control" required> 
            </div>
            <button name="sbm" class="btn btn-success" type="submit">ADD</button>
        </form>
    </div>
    </div>
</div>