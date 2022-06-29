<?php
    include("connect.php");
    $sql = " SELECT * FROM  hosocv INNER JOIN hosons ON hosons.maNS = hosocv.maNS " ; 
    $rs = mysqli_query($con, $sql);
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
    <h2 align="center"> Danh sách nhân sự </h2>
    <h4> Thêm công việc mới <a href="insert.php" > Thêm mới </a> </h4>
    <table border="1" width="100%" style="border-collapse: collapse; text-align: center;" > 
        <tr>
            <td> STT </td>
            <td> Tên công việc </td>
            <td> Mô tả </td>
            <td> Họ tên nhân sự </td>
            <td> Phòng ban </td>
            <td> Chức vụ </td>
            <td> Chức năng </td>
        </tr>
        <?php
            $count = 1;
            foreach ($rs as $key => $r) {   ?>
            <tr>
                <td> <?= $key+1 ?>  </td>
                <td> <?= $r['tenHSCV']?> </td>
                <td> <?= $r['moTa']?> </td>
                <td> <?= $r['hoTenNS']?> </td>
                <td> <?= $r['phongBan']?> </td>
                <td> <?= $r['chucVu']?> </td>
                <td> 
                    <a href="edit.php?id=<?= $r['maHSCV']?>" > <button> Sửa </button> </a>
                    <a href="delete.php?id=<?= $r['maHSCV']?>"  onclick="return confirm('Bạn có muốn xoá không?')"> <button> Xoá </button> </a>
                </td>
            </tr>
        <?php 
           }
        ?>
    </table>
</body>
</html>