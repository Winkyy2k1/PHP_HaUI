<?php 
$host ="localhost";
$uname = "root";
$upass = ""; // p thực hành 12345678
$dbname = "bth";
$con = mysqli_connect($host,$uname,$upass,$dbname);
if(!$con) {
    die(" Khong ket noi duoc: " .mysqli_connect_errno());
}
else {
    echo "Kết nối với csdl thành công. ";
}
?>