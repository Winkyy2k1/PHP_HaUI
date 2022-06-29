<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $SinhVien = array("SV1"=>array("name"=>"Nguyen Van A","gt"=>"Nam","ngaySinh"=>"10/01/2001","queQuan"=>"Hà Nội"),
                    "SV2"=>array("name"=>"Nguyen Van B","gt"=>"Nam","ngaySinh"=>"15/08/2001","queQuan"=>"Hà Nội"),
                    "SV3"=>array("name"=>"Nguyen Thi C","gt"=>"Nữ","ngaySinh"=>"20/04/2001","queQuan"=>"Hà Nam"),
                    "SV4"=>array("name"=>"Nguyen Thi D","gt"=>"Nữ","ngaySinh"=>"22/01/2001","queQuan"=>"Hải Phòng"),
                    "SV5"=>array("name"=>"Nguyen Thị E","gt"=>"Nữ","ngaySinh"=>"10/01/2002","queQuan"=>"Hưng Yên"));
    ?>
    <table border="1" width= "800" style="border-collapse:collapse">
        <tr>
            <th> Mã SV </th>
            <th> Tên SV </th>
            <th> Giới tính </th>
            <th> Ngày sinh </th>
            <th> Quê quán </th>
        </tr>

    <?php
        foreach ($SinhVien as $key => $value) {
            echo '<tr>';
            echo "<td> $key  </td>";
            echo "<td>" .$value["name"]." </td>";
            echo "<td>" .$value["gt"]." </td>";
            echo "<td>" .$value["ngaySinh"]." </td>";
            echo "<td>" .$value["queQuan"]." </td>";
            echo '</tr>';
        }
    ?>
    </table>

    <?php
    echo "<br> Tìm sinh viên có mã xác định. ";
    $tim_ma = 'SV1';
    
    if (array_key_exists($tim_ma, $SinhVien))   echo "<br> $key - " .$value["name"]. " - " .$value["gt"] ." - " .$value["ngaySinh"]. " - " .$value["queQuan"];
        else {
            echo "<br> Không tìm thấy sv có mã $tim_ma" ;
        }
    
    echo "<br> Xoá phần tử ";

    ?>
</body>
</html>