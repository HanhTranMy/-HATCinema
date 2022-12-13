<?php
session_start();
require_once("./utils.php");

$action = getPOST('action');

switch ($action) {
    case 'login':
        login();
        break;
    case 'register':
        register();
        break;
}

function register()
{
    $email = getPOST('email');
    $pass = getPOST('pass');
    $name = getPOST('name');
    $sdt = getPOST('phone');
    $pass = md5($pass);

    $values = "'$name','$email','$pass','$sdt',0,";
    $valuedefault = "'$email'";

    if (checkAccountRegis($email)) {
        addData('taikhoan', 'ten,email,matKhau,admin,sdt,ngaySinh', $values);

        return "You have successfully registered.<br/> Please login.";
    }
    return "The account has been created.";
}
if (isset($_POST['register'])) {
    $announce = register();
}

?>