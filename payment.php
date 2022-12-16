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
	<link rel="stylesheet" href="./css/payment.css">

    <title>HAT CINEMA</title>


</head>
<body>
	<!-- Start navbar -->
	<?php include_once('./navbar.php') ?>
	<div class="main">
		<div class="section">
			<div class="container input_group">
				<div style="margin-bottom: 20px;" class="text_bold">Thông tin khách hàng</div>
				<input type="text" name="name" id="name" placeholder="Họ và tên"/>
				<input type="email" name="mail" id="mail" placeholder="Email"/>
				<input type="text" name="user" placeholder="Mã khuyến mãi" />
			</div>
			
			<div class="payment_method_group container">
				<div class="text_bold">Hình thức thanh toán</div>
				<div class="payment_method_group_item row">
						<div class="col-1">
							<input type="radio" id="atm" name="payment_method" />
						</div>
						<div class="col-11 d-flex justify-content-start">
							<label for="atm">
								<img src="./img/logo.png" />
								<div>Thẻ ATM/Internet Banking <br/> Thẻ tín dụng (credit card) <br/> Thẻ ghi nợ (Debit card)</div>
							</label>
						</div>
				</div>
				<div class="payment_method_group_item row">
					<div class="col-1">
						<input type="radio" id="momo" name="payment_method" />
					</div>
					<div class="col-11 d-flex justify-content-start">
						<label for="momo">
							<img src="./img/logo.png" />
							<div>Ví điện tử MOMO</div>
						</label>
					</div>
				</div>
				<div class="payment_method_group_item">
					<div class="col-1">
						<input type="radio" id="zalopay" name="payment_method" />
					</div>
					<div class="col-11 d-flex justify-content-start">
						<label for="zalopay">
							<img src="./img/logo.png" />
							<div>Ví điện tử ZaloPay</div>
						</label>
					</div>
				</div>
			</div>
			
			<div class="d-flex justify-content-center">
				<button class="pay_button">Thanh toán</button>
			</div>
		</div>
		<div class="section">
			<div class="d-flex receipt_info">
				<img src="./img/17.jpg" alt="" class="film_img">
				<div class="ml-4">
					<div class="film_name">SEMATIC ERROR: LỖI LOGIC 2D</div>
					<table>
						<tr>
							<td>Ngày</td>
							<td>Thứ 2, 01/09/2022</td>
						</tr>
						<tr>
							<td>Giờ chiếu</td>
							<td>9:30-11:20</td>
						</tr>
						<tr>
							<td>Rạp chiếu</td>
							<td>D12, D13</td>
						</tr>
						<tr>
							<td>Ghế ngồi</td>
							<td>Thứ 2, 01/09/2022</td>
						</tr>
						<tr>
							<td>Số lượng: 02</td>
						</tr>
						<tr>
							<td>Giá: 180.000 VNĐ</td>
						</tr>
					</table>
					<div class="seperator" style="margin: 10px 0"></div>
					<div class="info_group">
						<div>Combo Bigmon(Ghi chú)</div>
						<div>Số lượng: 01</div>
					</div>
					<div style="margin-top: 10px;">Giá: 120.000 VNĐ</div>
					<div class="seperator" style="margin: 10px 0"></div>
				</div>
			</div>
			
			<div class="text_bold">
				<div>
					Mã giảm giá
				</div>
				<div class="d-flex justify-content-around" style="margin: 80px 0;">
					<div>Khuyến mãi</div>
					<div>Mã cuối tuần</div>
				</div>
			</div>
			<div>
				<div class="text_bold">Điểm thành viên</div>
				<div class="seperator" style="margin: 20px 0;"></div>
				<div>
					<div class="d-flex justify-content-between" style="margin-left:15px">
						<div>Tạm tính:</div>
						<div class="text_bold">300.000 VNĐ</div>
					</div>
					<div class="d-flex justify-content-between" style="margin-left:15px; margin-top:10px">
						<div>Giảm giá:</div>
						<div class="text_bold">-50.000 VNĐ</div>
					</div>
					<div class="seperator" style="margin: 20px 0"></div>
					<div class="d-flex justify-content-between" style="margin-left:15px">
						<div>Tổng tiền:</div>
						<div class="text_bold" style="font-size: 20px;">250.000 VNĐ</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- Start footer -->
	<?php include_once('./footer.php') ?>
	<!-- End footer -->
</body>
</html>