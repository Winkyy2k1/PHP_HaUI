<?php 
include("connect.php"); 
$name = $_POST['nameUser'];
$pass = $_POST['passUser'];
$gt = $_POST['gtUser'];
$nganh = $_POST['nganhHocUser'];

   $sql = "INSERT INTO qlbh (pass, name, gioiTinh, nganhHoc) VALUES ('$name', '$pass','$gt','$nganh') ";
    mysqli_query($con, $sql);

    include("display.php");

?>
