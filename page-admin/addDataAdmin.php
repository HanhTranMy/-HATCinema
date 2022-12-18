<?php

    require_once('../utils.php');

	if($_POST['target'] == "taikhoan") {
		$ten = getPOST('ten');
		$sdt = getPOST('sdt');
		$admin = getPOST('admin');
		$matKhau = getPOST('matKhau');
		$email = getPOST('email');
		$target = getPOST('target');

		addData($target, "email, matKhau, ten, admin, sdt", "'$email', '$matKhau', '$ten', '$admin', '$sdt'");
		echo "success";
	} 

	if ($POST['target'] == 'phim') {
		$maPhim = getPOST('maphim');
		$ngayBD = getPOST('ngayBD');
		$ngayKT = getPOST('ngayKT');
		$gia = getPOST('gia');
		$quocGia = getPOST('quocGia');
		$tenPhim = getPOST('tenPhim');
		$theLoai = getPOST('theLoai');
		$thoiLuong = getPOST('thoiLuong');
		$trangThai = getPOST('trangThai');

		addData($target, "maPhim, ngayBD, ngayKT, gia, quocGia, tenPhim, theLoai, thoiLuong, trangThai", "'$maPhim', '$ngayBD', '$ngayKT', '$gia', '$quocGia', '$tenPhim', '$theLoai', '$thoiLuong', '$trangThai'")
	}
?>