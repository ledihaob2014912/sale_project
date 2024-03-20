<?php
$connect = mysqli_connect("localhost","root","","Saleweb","3307");
if($connect){
 mysqli_query($connect, "SET NAMES 'UTF8'");
 echo "Connected successfully";
}else{
 echo "The conecting was failed";
}


// Kiểm tra kết nối
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
?>