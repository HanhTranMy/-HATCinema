<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/homepage.css">
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/card.css">
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="./footer.css">

    <title>HAT CINEMA</title>


</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top mg" style="background-color:black;">  
        <div class="container-fluid">   
            <a class="navbar-brand" href="#"><img src="./img/logo.png" width="100%" height="72px"></img></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav mr-auto heading">
                    <li class="nav-item active"><a class="nav-link text-white" href="#">MUA VÉ</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">RẠP PHIM</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">KHUYẾN MÃI</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">THÀNH VIÊN</a></li>
                    <li class="nav-item">
                        <form class="form-inline my-2 my-lg-0 test">
                            <img src="./img/ic_search.png" alt="" class="img-search">
                            <input class="form-control input-search" type="search" aria-label="Search" size = 35;>
                        </form>
                    </li>
                </ul>

                <ul class="nav navbar-nav mr-5 heading">
                    <li class="nav-item"><a class="nav-link text-white" href="#">Login/Đăng ký <span> <img src="./img/ic_user.png" alt="" class ="img-user"> </span></a></li>
                </ul>  
   
            </div>   

        </div>
    </nav>
</div>

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

    <!-- Start a coming soon -->
    <div class="container show-film">
      <div class="row heading-film">
        <div class="col-6">
          <h3 class="font-weight-700 text-white title-large">PHIM SẮP CHIẾU</h3>
        </div>
        <div class="col-6 d-flex justify-content-end">
          <a href="#" class=" btn-xemthem text-white font-weight-700">Xem thêm</a>
        </div>
      </div>
      <div class="row">

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card" >
                <img class="card-img-top" src="./img/imgCard.jpg" alt="Card image" width="300px">
                <div class="card-body">
                    <a href="#">
                        <h4 class="card-title overflow-text">John Doe</h4>
                        <p class="card-text overflow-text">Some example text.</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card" >
                <img class="card-img-top" src="./img/imgCard.jpg" alt="Card image" width="300px">
                <div class="card-body">
                    <a href="#">
                        <h4 class="card-title overflow-text">John Doe</h4>
                        <p class="card-text overflow-text">Some example text.</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card" >
                <img class="card-img-top" src="./img/imgCard.jpg" alt="Card image" width="300px">
                <div class="card-body">
                    <a href="#">
                        <h4 class="card-title overflow-text">John Doe</h4>
                        <p class="card-text overflow-text">Some example text.</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card" >
                <img class="card-img-top" src="./img/imgCard.jpg" alt="Card image" width="300px">
                <div class="card-body">
                    <a href="#">
                        <h4 class="card-title overflow-text">John Doe</h4>
                        <p class="card-text overflow-text">Some example text.</p>
                    </a>
                </div>
            </div>
        </div>
        </div>
      </div>
    </div>
    <!-- End  a coming soon -->

      <!-- Start a coming soon -->
      <div class="container show-film">
        <div class="row heading-film">
          <div class="col-6">
            <h3 class="font-weight-700 text-white title-large">ĐANG CHIẾU</h3>
          </div>
          <div class="col-6 d-flex justify-content-end">
            <a href="#" class=" btn-xemthem text-white font-weight-700">Xem thêm</a>
          </div>
        </div>
        <div class="row">
  
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card" >
                  <img class="card-img-top" src="./img/imgCard.jpg" alt="Card image" width="300px">
                  <div class="card-body">
                      <a href="#">
                          <h4 class="card-title overflow-text">John Doe</h4>
                          <p class="card-text overflow-text">Some example text.</p>
                      </a>
                  </div>
              </div>
          </div>
  
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card" >
                  <img class="card-img-top" src="./img/imgCard.jpg" alt="Card image" width="300px">
                  <div class="card-body">
                      <a href="#">
                          <h4 class="card-title overflow-text">John Doe</h4>
                          <p class="card-text overflow-text">Some example text.</p>
                      </a>
                  </div>
              </div>
          </div>
  
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card" >
                  <img class="card-img-top" src="./img/imgCard.jpg" alt="Card image" width="300px">
                  <div class="card-body">
                      <a href="#">
                          <h4 class="card-title overflow-text">John Doe</h4>
                          <p class="card-text overflow-text">Some example text.</p>
                      </a>
                  </div>
              </div>
          </div>
  
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
              <div class="card" >
                  <img class="card-img-top" src="./img/imgCard.jpg" alt="Card image" width="300px">
                  <div class="card-body">
                      <a href="#">
                          <h4 class="card-title overflow-text">John Doe</h4>
                          <p class="card-text overflow-text">Some example text.</p>
                      </a>
                  </div>
              </div>
          </div>
          </div>
        </div>
      </div>
      <!-- End  a coming soon -->

      <!-- Start a promotion -->
    <div class="container show-film" style="margin-bottom: 6.563em; ">
        <div class="row">
            <div class="col-12">
                <p class="header">phim đang chiếu</p>
            </div>
        </div>
        <div class="row">
            <div class="col-9">
                <div class="row  content-promotion content-promotion-large">
                    <img class="img-promotion-large" src="./img/22.jpg">
                </div>
                <div class="row content-promotion content-promotion-large" >
                    <img class="img-promotion-large" src="./img/22.jpg">
                </div>
            </div>
            <div class="col-3">
                <div class="row">

                    <div class="col-12 content-promotion content-promotion-small" >
                        <img  src="./img/22.jpg">
                    </div>

                    <div class="col-12 content-promotion content-promotion-small" >
                            <img src="./img/22.jpg">
                    </div>

                    <div class="col-12 content-promotion content-promotion-small" >
                            <img src="./img/22.jpg">
                    </div>

                </div>            
            </div>            
        </div>
    </div>
      <!-- End a promotion -->

      <!-- Start footer -->
      <div class="footer">
        <div class="logo">
            <img src="./img/logo.png" alt="HAT cinema logo">
        </div>
        <div class="info">
            <div class="thong_tin_lien_he info_child">
                <div class="row">
                    <div class="col-md-8 offset-md-2">THÔNG TIN LIÊN HỆ</div>
                    <div class="col-md-8 offset-md-2 text-muted font-weight-light mt-2">
                        Email: hatcinema@gmail.com <br>
                        Hotline: 1900 0000 <br>
                        Giờ làm việc: 8:00 - 22:00 (Tất cả các ngày làm việc)
                    </div>
                </div>
            </div>
            <div class="thanh_vien info_child">
                <div class="row">
                    <div class="col-md-8 offset-md-2">THÀNH VIÊN</div>
                    <div class="col-md-8 offset-md-2 text-muted font-weight-light mt-2">
                        Thông tin tài khoản <br>
                        Lịch sử mua vé <br>
                        Đánh giá
                    </div>
                </div>
            </div>
            <div class="dieu_khoan_su_dung info_child">
                <div class="row">
                    <div class="col-md-8 offset-md-2">ĐIỂU KHOẢN SỬ DỤNG</div>
                    <div class="col-md-8 offset-md-2 text-muted font-weight-light mt-2">
                        Điều khoản chung<br>
                        Điều khoản giao dịch<br>
                        Chính sách thanh toán<br>
                        Chính sách bảo mật<br>
                        Câu hỏi thường gặp
                    </div>
                </div>
            </div>
            <div class="ket_noi_voi_chung_toi info_child">
                <div class="row">
                    <div class="col-md-12 offset-md-2">KẾT NỐI VỚI CHÚNG TÔI</div>
                    <div class="col-md-8 offset-md-2 text-muted font-weight-light mt-2"></div>
                </div>
            </div>
        </div>
    </div>
      <!-- End footer -->
</body>
</html>