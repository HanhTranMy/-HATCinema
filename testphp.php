<?php 

include_once("./utils.php");

session_start();
$data = getData('SELECT * FROM taikhoan',1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?php print_r($data);
    ?> </h1>
</body>
</html>

<?php ?>