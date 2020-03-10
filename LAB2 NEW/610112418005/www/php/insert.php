<?php

include("conDB.php");

$user = $_POST['user'];
$pass = $_POST['pass'];
$time = time();

echo $strSQL = "INSERT INTO tb_login VALUES('$user','$pass','$time')";
$objRes = mysqli_query($link,$strSQL);

echo  $objRes?$user + "Inserted....." : mysqli_query($link);


?>