<?php
   require_once 'database.php';
   $id = $_GET['id'];
   $sql = "DELETE FROM products where product_id = $id;";
   $query = mysqli_query($connect,$sql);
   //echo $sql; exit;
   header("location:main.php");
?>