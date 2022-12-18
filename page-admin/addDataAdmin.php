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
		$ngayBD = getPOST('ngayBD');
		$ngayKT = getPOST('ngayKT');
		$gia = getPOST('gia');
		$quocGia = getPOST('quocGia');
		$tenPhim = getPOST('tenPhim');
		$theLoai = getPOST('theLoai');
		$thoiLuong = getPOST('thoiLuong');
		$trangThai = getPOST('trangThai');
		$target = getPOST('target');

		addData($target, "ngayBD, ngayKT, gia, quocGia, tenPhim, theLoai, thoiLuong, trangThai", "'$ngayBD', '$ngayKT', '$gia', '$quocGia', '$tenPhim', '$theLoai', '$thoiLuong', '$trangThai'");
	}

	if ($_POST['target'] == 'rap') {
		$theLoai = getPOST('theLoai');

		addData($target, "theLoai", "'$theLoai'");
	}

	if ($_POST['target'] == 'bapnuoc') {
		$tenSP = getPOST('tenSP');
		$gia = getPOST('gia');
		$target = getPOST('target');

		addData($target, "tenSP, gia", "'$tenSP', '$gia'");
	}

	if ($_POST['target'] == 'khuyenmai') {
		$maKM = getPOST('maKM');
		$chuDe = getPOST('chuDe');
		$noiDung = getPOST('noiDung');
		$ngayBD = getPOST('ngayBD');
		$ngayKT = getPOST('ngayKT');
		$target = getPOST('target');

		addData($target, "maKM, chuDe, noiDung, ngayBD, ngayKT", "'$maKM', '$chuDe', '$noiDung', '$ngayBD', '$ngayKT'");
	}

	if ($_POST['target'] == 'xuatchieu') {
		$ngaygio = getPOST('ngaygio');
		$maPhong = getPOST('maPhong');
		$maPhim = getPOST('maPhim');
		$maRap = getPOST('maRap');
		$target = getPOST('target');
		
		addData($target, "ngaygio, maPhong, maPhim, maRap", "'$ngaygio', '$maPhong', '$maPhim', '$maRap'")
	}
?>