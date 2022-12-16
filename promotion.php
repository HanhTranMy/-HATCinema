<?php

    require_once('./utils.php');

    
    $statementPromotion = "SELECT anh,chuDe,noiDung FROM khuyenmai";
    $dataPromotion = getAllData($statementPromotion,1);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- link -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- link text type -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
	<!-- source -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<!-- link css -->
	<link rel="stylesheet" href="./css/promotion_style.css">
	<link rel="stylesheet" href="./css/nav.css">
	<link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/general.css">

	<title>PROMOTION</title>
</head>
<body>
	<div id="pr">
		<div class="heading">
            <!-- Navbar -->
            <?php include_once('./navbar.php') ?>
        </div>
			<!--Content  -->
		<div id="content">
			<!-- header:start -->
			<div class="ds-line">
				<h1 class="titleLogin mg-bottom font-weight-70 header">Khuyễn mãi</h1>
				<hr class ="mg-bottom">
			</div>
			<!-- header:end -->
			<!-- body:start -->
			<div class="body container-fluid ">
				<div class="h-20">
					<div class="row">
						<div class="col">
							<div class="card">
								<img src="./img/promotion.png" class="card-img-top" alt="">
								<div class="card-body">
									<h4 class="card-title overflow-text">Free popcorn for action movie ticket</h4>
									<p class="card-text overflow-text">Some example text.</p>
								</div>
							</div>
							<br>
						</div>
						<div class="col">
							<div class="card">
								<img src="./img/promotion.png" class="card-img-top" alt="">
								<div class="card-body">
									<h4 class="card-title overflow-text">Free popcorn for action movie ticket</h4>
									<p class="card-text overflow-text">Some example text.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="card">
								<img src="./img/promotion.png" class="card-img-top" alt="">
								<div class="card-body">
									<h4 class="card-title overflow-text">Free popcorn for action movie ticket</h4>
									<p class="card-text overflow-text">Some example text.</p>
								</div>
							</div>
							<br>
						</div>
						<div class="col">
							<div class="card">
								<img src="./img/promotion.png" class="card-img-top" alt="">
								<div class="card-body">
									<h4 class="card-title overflow-text">Free popcorn for action movie ticket</h4>
									<p class="card-text overflow-text">Some example text.</p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card">
								<img src="./img/promotion.png" class="card-img-top" alt="">
								<div class="card-body">
									<h4 class="card-title overflow-text">Free popcorn for action movie ticket</h4>
									<p class="card-text overflow-text">Some example text.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="card">
								<img src="./img/promotion.png" class="card-img-top img-fluid" alt="">
								<div class="card-body">
									<h4 class="card-title overflow-text">Free popcorn for action movie ticket</h4>
									<p class="card-text overflow-text">Some example text.</p>
								</div>
							</div>
							<br>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="card">
								<img src="./img/promotion.png" class="card-img-top img-fluid" alt="">
								<div class="card-body">
									<h4 class="card-title overflow-text">Free popcorn for action movie ticket</h4>
									<p class="card-text overflow-text">Some example text.</p>
								</div>
							</div>
							<br>
						</div>
						<div class="col">
							<div class="card">
								<img src="./img/promotion.png" class="card-img-top img-fluid" alt="">
								<div class="card-body">
									<h4 class="card-title overflow-text">Free popcorn for action movie ticket</h4>
									<p class="card-text overflow-text">Some example text.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center">
					<button type="button" class="btn btn-primary btn-lg">Xem thêm</button>
				</div>
				<div class="h-20">
					<div class="row">
						<?php foreach($dataPromotion as $value): ?>
							<div class="col">
								<div class="card">
									<img src="<?php echo $value['anh'];?>" class="card-img-top img-fluid" alt="">
									<div class="card-body">
										<h4 class="card-title overflow-text"><?php echo $value['chuDe'];?></h4>
										<p class="card-text overflow-text"><?php echo $value['noiDung'];?></p>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<!-- body:end -->
		</div>
			<!-- footer of page -->
		<?php include_once('./footer.php') ?>
	</div>
</body>
</html>