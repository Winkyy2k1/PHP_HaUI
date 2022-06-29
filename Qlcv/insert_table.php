<?php
    include("connect.php");
    $tenHSCV = $_POST['tenHSCV'];
    $moTa = $_POST['moTa'];
    $hoTenNS = $_POST['nameNS'];
    $phongBan = $_POST['PhongBan'];
    $chucVu = $_POST['ChucVu'];

    if(  $tenHSCV!='' &&   $moTa!='' &&   $hoTenNS!='' &&  $phongBan!='' &&  $chucVu!='' )
    {
        echo "Dữ liệu hợp lệ.";
        // $sql = " INSERT INTO hosocv (`tenHSCV`, `moTa`)
        //  VALUES ('$tenHSCV',' $moTa')";
        // $sql .= " INSERT INTO `hosons`(`hoTenNS`, `phongBan`, `chucVu`) 
        //  VALUES ('$hoTenNS','$phongBan','$chucVu')";

        //$sql = "INSERT INTO `hosons`(`maNS`, `hoTenNS`, `phongBan`, `chucVu`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')";
         $sql2 = "INSERT INTO `hosocv`( `tenHSCV`, `moTa`, `hinhAnh`, `thoiGianBD`, `thoiGianKT`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')";
         //$rs= mysqli_multi_query($con, $sql);
         $rs2= mysqli_multi_query($con, $sql2);
         var_dump($rs2);
          include("display_nhansu.php");
    }
    else
    {
        echo "Bạn chưa nhập đủ các trường dữ liệu. Không thể thêm mới";
        include("insert.php");
    }
    
?>