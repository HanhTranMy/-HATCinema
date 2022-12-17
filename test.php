<?php
   $announce = "";
   require_once('./utils.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <title>Document</title>
</head>

<body>
    <div class="buy-product">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="sub text-white font-weight-800 font-size-20">Mua sản phẩm</div>
            </div>
            <?php
            $data = getAllData('SElECT * FROM bapnuoc', 1);

            foreach ($data as $value) {
            ?>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card" id = "<?php echo $value['maBapNuoc']?>" >
                        <img class="card-img-top" src="./img/img_bapnuoc.jpg" alt="Card image" width="247" height="208">
                        <div class="card-body">
                            <h4 class="card-food-title"><?php echo $value['tenSP'] ?></h4>
                            <p class="card-food-text"><?php echo 'Giá: ' . $value['gia'] . '.vnd' ?></p>
                            <a class="btn-promotion" href="#">Xem thêm</a>
                        </div>
                    </div>
                </div>
            <?php }; ?>
        </div>
</body>
        <script type="text/javascript">
            
            $(document).ready(function(){
            $(".card").click(function(){
                var movie_id = $(this).attr("id");
                var url = "test2.php" + "?id=" + movie_id;
                window.location.href = url;
            });
        });
        
        </script>


</html>