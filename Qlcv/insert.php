<?php
    include("connect.php");
    $sql = " SELECT * FROM  hosocv INNER JOIN hosons ON hosons.maNS = hosocv.maNS " ; 
    $rs = mysqli_query($con, $sql);
    $list = array();
    if(mysqli_num_rows($rs) > 0)
    {   while($item = mysqli_fetch_array($rs))
        {
            array_push($list, $item);
        } }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới nhân sự </title>
</head>
<body>
    <h3  align="center"> Nhập thông tin công việc cần thêm mới </h3>
    <table align="center">
        <form action="insert_table.php" method="POST" enctype="multipart/form-data">
            <tr>
                <td> Tên công việc </td>
                <td> <input type="text" name="tenHSCV" ></td>
            </tr>
            <tr>
                <td> Mô tả </td>
                <td> <input type="text" name="moTa" ></td>
            </tr>
            <tr>
                <td> Họ tên nhân sự  </td>
                <td>
                    <select name="nameNS" >
                        <option value=""> Chọn tên nhân sự </option>
                        <?php   foreach ($list as $item ) {  ?>
                            <option value="<?= $item['maNS']?> "> <?= $item['hoTenNS']?> </option>
                        <?php 
                            }
                        ?> 
                    </select>
                </td>
            </tr>
            <tr>
                <td> Chức vụ   </td>
                <td>
                <select name="ChucVu" >
                    <option value="" > Chọn chức vụ </option>
                    <?php foreach ($list as $item ) {  ?>
                        <option value="<?= $item['maNS']?> "> <?= $item['chucVu']?> </option>
                    <?php 
                        }
                    ?> 
                </select>
                </td>
            </tr>
            <tr>
                <td> Phòng ban   </td>
                <td>
                <select name="PhongBan" >
                    <option value=""> Chọn phòng ban </option>
                    <?php   foreach ($list as $item ) {  ?>
                        <option value="<?= $item['maNS']?> "> <?= $item['phongBan']?> </option>
                    <?php 
                        }
                    ?> 
                </select>
                </td>
            </tr>
            <tr>
               <td> <button type="submit"> Thêm mới </button></td>
               <td> <button> <a href="display_nhansu.php" > Huỷ thêm </a> </button></td>
            </tr>
           
        </form>
    </table>
</body>
</html>