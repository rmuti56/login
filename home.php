<?php
session_start();
if(isset($_COOKIE['email'])){
  $email = $_COOKIE['email'];
}else{
  $email = "ไม่ได้";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>หน้าหลัก</title>
    <link rel="stylesheet" type="text/css" href="./node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css" />
    <link rel="stylesheet" href="./css/custom.css" />
    <style>
    body {
        background: url(./images/com.jpg);
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <a class="navbar-brand fa fa-home" href="#"> หน้าหลัก</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="#">หน้าแรก </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        สินค้า
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./insertProduct.html">เพิ่มสินค้า</a>
                        <a class="dropdown-item" href="#">ดูสินค้าทั้งหมด</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">นำสินค้าออก</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">อื่นๆ</a>
                </li>
            </ul>
            <form class="form-inline ">
                <a href="./login.html">
                    <p><?php echo $email ?></p>
                </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-success my-2 my-sm-0" type="submit">
                    Search
                </button>
            </form>
        </div>
    </nav>

    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>