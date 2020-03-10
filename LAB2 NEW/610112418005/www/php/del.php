<?php
require "conDB.php";

$user = $_GET["user"];

$strSQL = "DELETE FROM tb_login WHERE username = '$user' ";

$objRes = mysqli_query($link,$strSQL);

@echo $objRes? $user + " is deleted...." : mysqli_error($link);

?>