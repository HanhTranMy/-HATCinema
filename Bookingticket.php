<?php require('./conn/conn.php')?>
<?php $sql = "SELECT * FROM premiere";
    $sql1 = "SELECT * FROM movie_theater";
     $result = $conn->query($sql);
     $result1 = $conn->query($sql1);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/homepage.css">
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/card.css">
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="./footer.css">
    <link rel="stylesheet" href="./css/Bookingticket.css">
    

    <title>HAT CINEMA</title>


</head>

<body>

    <?php /*include_once('./navbar.php') */ ?>


    <!-- Start a carousel -->
    <div id="demo" class="carousel slide" data-ride="carousel"> -->

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/banner-1.jpg" alt="Phim Kẻ Độc Hành" width="100%" height="666">
            </div>
            <div class="carousel-item">
                <img src="./img/banner-2.jpg" alt="Phim Avergea" width="100%" height="666">
            </div>
            <div class="carousel-item">
                <img src="./img/banner-3.jpg" alt="Phim Rio 2" width="100%" height="666">
            </div>
        </div>
    </div>
    <!-- End a carousel -->
    <!-- start content -->
    <div class="wrap-action">
        <div class="container">
            <div class="gr-action d-flex justify-content align-items-center">
                <div class="action-item active">
                    <a href="#">Chọn vé</a>
                </div>
                <div class="action-item">
                    <a href="#">Chọn ghế</a>
                </div>
                <div class="action-item">
                    <a href="#">Chọn vé</a>
                </div>
                <div class="action-item">
                    <a href="#">Chọn đồ ăn</a>
                </div>
                <div class="action-item">
                    <a href="#">Thanh toán</a>
                </div>
                <div class="action-item">
                    <a href="#">Đặt vé thành công</a>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap-time">
        <div class="container">
            <!-- <div class="title-time text-center text-white">
                <span>Thứ 2,01/09/2022</span>
            </div> -->
            <div class="text-time">
                <span>Thời gian</span>
            </div>
            <div class="gr-time d-flex justify-content align-items-center flex-wrap">

            <?php foreach ($result as $k => $v) {?>
                <div class="time-item <?=($k==0)?"active":""?>">
                    <span class="day"><?= date_format(date_create($v['day']),"D");?></span>
                    <p class="mb-0 time"><?= date_format(date_create($v['day']),"d-m");?></p>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="wrap-offer">
        <div class="container">
            <div class="text-offer d-flex align-content-center justify-content-start">
                <span class="title">Rạp đề xuất</span>
                <span class="address">TP.Hồ Chí Minh</span>
            </div>
        </div>
        <div class="line1"></div>

        <?php foreach ($result1 as $k => $v) {
            $result2 = $conn->query("SELECT * FROM chair where id_movie_theater =".$v["id"]);
            
            ?>
            <div class="container">
            <div class="form-row  pt-5 pb-5">
                <div class="col-md-6">
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="item-left">
                            <img src="<?=$v['photo']?>" width="100px" alt="">
                            <div class="btn-offer"><a href="">Tìm vị trí</a></div>
                        </div>
                        <div class="item-right">
                            <span class="offer-name">
                                <?=$v['name']?>
                            </span>
                            <p class="offer-desc mb-0">
                                <?=$v['address']?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tit-offer">2D Phụ đề</div>
                    <div class="gr-offer d-flex justify-content-start aling-items-center">
                        <?php foreach ($result2 as $k2 => $v2) {?>
                            <div class="item-offer">
                                <span class="offer-time"><?=$v2['time']?></span>
                                <p class="offer-time mb-0"><?=$v2['r_amount']?>/<?=$v2['amount']?> Ghế</p>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        <div class="line1"></div>
       <?php } ?>
       
   
   
    </div>

    <!-- end content -->

    <!-- Start footer -->
    <?php include_once('./footer.php') ?>
    <!-- End footer -->
</body>

</html>