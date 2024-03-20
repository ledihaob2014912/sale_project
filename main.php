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

// Truy vấn cơ sở dữ liệu
$sql = "SELECT * FROM products ";
$query = mysqli_query($connect,$sql);
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

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <script type="text/javascript">
        const loading_icon_url = 'https://mir-s3-cdn-cf.behance.net/project_modules/max_632/04de2e31234507.564a1d23645bf.gif';
    </script>

    <header>
        <div id="top_banner" style="background-color:#DFC8FF" >
            <img src="img/banner/banner-top.jpg" 
                alt="" />
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 sticky-top">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span id="bar" class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a href="index.html"><img src="img/Faa-basic.png" width=100px height=100px alt=""></a>

                    <ul class="navbar-nav ml-auto text-right">
                        <li class="nav-item">
                            <form class="d-flex">
                                <input class="form-control me-2" type="text" placeholder="Nhập thứ cần tìm...">
                                <button class="btn btn-link" type="button"><a href="search.html"><i
                                            class="fa fa-search icon-white"></i></a></button>
                            </form>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="./main.php">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gioithieu.html">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="insert.php">Thêm Sản Phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="modify.php">Sửa Sản Phẩm</a>
                        </li>
                        <li class="nav-item" display=hidden>
                            <a class="nav-link" href="delete.php">Xóa Sản Phẩm</a>
                        </li>
                        <li class="nav-item" display=hidden>
                            <a class="nav-link" href="register.html">Hỗ Trợ</a>
                        </li>
                        
                </div>
            </div>
        </nav>
    </header>
<section>
    <main class="container container-fluid pt-2">
        <div class="row mx-auto">
            <div class="col-sm-8 pt-2">
                <!-- Carousel -->
                <div id="demo" class="carousel slide " data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner ">
                        <div class="carousel-item active">
                            <img src="img/banner/banner-1.png"
                                class="d-block w-100 rounded-2 ">
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner/banner-2.jpg"
                                class="d-block w-100 rounded-2 ">
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner/banner-3.jpg"
                                class="d-block w-100 rounded-2 ">
                        </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev carousel-button" type="button" data-bs-target="#demo"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next carousel-button" type="button" data-bs-target="#demo"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>

            <div class="row col-sm-4 banner-nho">
                <div class="pt-2">
                    <a href="#">
                        <img class="border_radius_normal rounded-2" style="width: 100%;"
                            src="img/banner/banner-4.jpg" />
                    </a>
                </div>
                <div class="pt-2">
                    <a href="#">
                        <img class="border_radius_normal rounded-2" style="width: 100%;"
                            src="img/banner/banner-5.jpg" />
                    </a>
                </div>
            </div>
        </div>

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
        $i=1;
        while($row = mysqli_fetch_assoc($query)){?>
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
            <button class="buy-btn">MUA NGAY</button>
        </div>                
        <?php 
        }
        ?>
    </div>
</section>

</main>

<footer class="mt-5 py-5">
    <div class="row container-fluid mx-auto pt-5">
        <div class="footer-one col-lg-3 col-md-6 col-12 center mb-3">
            <img src="img/Faa-color.png"width="175px" height="175px" alt="">
            <p class="pt-3">................................................</p>
            <div class="copyright mt-1 mb-5">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-pinterest"></i></a>
            </div>
        </div>
        <div class=" footer-one col-lg-3 col-md-6 col-12 mb-3">
            <h5 class="pb-2">DỊCH VỤ</h5>
            <ul class=" list-unstyled">
                <li><a href="#">Điều khoản sử dụng</a></li>
                <li><a href="#">Chính sách bảo mật thông tin cá nhân</a></li>
                <li><a href="#">Chính sách bảo mật thanh toán</a></li>
                <li><a href="#">Giới thiệu Diversion</a></li>
                <li><a href="#">Hệ thống cửa hàng</a></li>
            </ul>
        </div>
        <div class=" footer-one col-lg-3 col-md-6 col-12 mb-3">
            <h5 class="pb-2">HỖ TRỢ</h5>
            <ul class=" list-unstyled">
                <li><a href="#">Chính sách đổi - trả - hoàn tiền</a></li>
                <li><a href="#">Chính sách bảo hành - bồi hoàn</a></li>
                <li><a href="#">Chính sách vận chuyển</a></li>
                <li><a href="#">Chính sách khách sỉ</a></li>
                <li><a href="#">Phương thức thanh toán và xuất HĐ</a></li>
            </ul>
        </div>
        <div class=" footer-one col-lg-3 col-md-6 col-12 mb-3">
            <h5 class="pb-2">LIÊN HỆ</h5>
            <ul class="list-unstyled">
                <li>
                    <p><i class="fa-solid fa-location-dot"></i> Đại học Cần Thơ, 3 tháng 2, Xuân Khánh, Ninh Kiều, Cần Thơ</p>
                </li>
                <li>
                    <p><i class="fa-solid fa-envelope"></i> cskh@diversion.com.vn</p>
                </li>
                <li>
                    <p><i class="fa-solid fa-phone"></i> 1900636467</p>
                </li>
            </ul>
        </div>
    </div>
    <div class="center">
        <p>Diversion Ⓒ All Rights Recieved</p>
    </div>
</footer>
</body>
</html>
