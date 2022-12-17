<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/sidebar_admin.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/admin.css">
    <script src="./js/admin.js">
        $("#film").click(function() {
            alert("film clicked");
            // $(".body").load("./page-admin/film.php");
        });
    </script>

    <title>Admin HAT Cinema</title>
</head>

<body>

    <!-- Start a nav -->
    <div class="heading">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top mg" style="background-color:black;">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php"><img src="./img/logo.png" width="100%" height="72px"></img></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav mr-auto heading">
                        <li class="nav-item active"><a class="nav-link text-white" href="#">ADMIN</a></li>
                        <li class="nav-item" id="account"><a class="nav-link text-white" href="#">Tài khoản</a></li>
                        <li class="nav-item" id="film"><a class="nav-link text-white" href="#">Phim</a></li>
                        <li class="nav-item" id="cinema"><a class="nav-link text-white" href="#">Rạp</a></li>
                        <li class="nav-item" id="drink"><a class="nav-link text-white" href="#">Bắp nước</a></li>
                        <li class="nav-item" id="promotion-admin"><a class="nav-link text-white" href="#">Khuyến mãi</a></li>
                    </ul>

                    <ul class="nav navbar-nav mr-5 heading">
                        <li class="nav-item login-logout"><a class="nav-link text-white">

                                <?php

                                if (isset($_SESSION['username'])) {
                                    echo $_SESSION['username']['ten'];
                                } else {
                                    echo "Đăng nhập";
                                }


                                ?>

                                <span> <img src="./img/ic_user.png" alt="" class="img-user"> </span></a></li>
                    </ul>

                </div>

            </div>
        </nav>
    </div>
    <!-- End a nav -->
    <!-- Start a body -->
    <div class="body">
   
    </div>


    </div>
    </div>
    <!-- End a body -->

    <!-- Start a footer -->
    <?php include_once('./footer.php') ?>
    <!-- End a footer -->
</body>

</html>