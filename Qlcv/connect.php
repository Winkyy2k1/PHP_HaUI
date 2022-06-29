<?php
    $host = "localhost";
    $uname = "root";
    $upass = "";
    $dbname = "qlcv";

    $con = mysqli_connect($host,$uname,$upass,$dbname);
    if(!$con)
    {
        die(" Khong ket noi dk.");
    } 
?>
