<?php
    require_once 'database.php';

    $id = $_POST['id'];
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $query = mysqli_query($connect, "UPDATE products SET product_name = '$product_name', price = '$price', image = '$image' WHERE product_id = $id");

    if ($query) {
        header("Location: main.php");
    } else {
        echo "Lỗi: " . mysqli_error($connect);
    }
?>






