<?php

function getPOST($key)
{

    if (isset($_POST[$key])) {
        $result = $_POST[$key];
    } else {
        $result = '';
    }
    return $result;
}

function connectData()
{
    $conn = mysqli_connect("localhost", "root", "", "breakoutbrick");
    mysqli_set_charset($conn, 'utf8');
    return $conn;
}

function checkAccountLogin($user, $pass)
{
    $data =  selectData($user, 'user', 'username');

    if ($data == null) {
        return false;
    } else {
        if ($data['pass'] == $pass) {
            header('location: index.php');
            return true;
        } else {
            return false;
        }
    }
}

function getData($statement, $getData)
{

    $conn = connectData();
    $data = "";

    $query = mysqli_query($conn, $statement);
    if ($getData == 1) {
        $data = mysqli_fetch_array($query, MYSQLI_ASSOC);
    }
    mysqli_close($conn);
    return $data;
}

function selectData($user, $table, $id,)
{
    $statement = "SELECT * FROM $table WHERE $id = '$user'";
    return getData($statement, 1);
}

?>