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
?>