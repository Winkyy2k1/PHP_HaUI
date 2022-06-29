<?php
    include("connect.php");
    $sql = "SELECT * FROM qlbh ";
    $rs = mysqli_query($con,$sql);
?>   
    <h2> Danh sách dữ liệu người dùng là: </h2>
    <table width="1000px" style="border-collapse: collapse; text-align: center; " border="1" >
        <tr>
            <th> ID </th>
            <th> Pass </th>
            <th> Name </th>
            <th> Gioi Tinh </th>
            <th> Nganh Hoc </th>
            <th> Sửa </th>
            <th> Xoá </th>
        </tr>
        <?php foreach ($rs as $key ):   ?>
            <tr>
                <td> <?php echo $key['id'] ?>  </td>
                <td> <?php echo $key['pass'] ?> </td>
                <td> <?php echo $key['name'] ?> </td>
                <td> <?php echo $key['gioiTinh']   ?> </td>
                <td> <?php echo $key['nganhHoc']   ?> </td>
                <td> <a href="edit.php?id=<?php echo $key['id']?> "> <button>  Edit </button> </td> 
                <td> <a href="delete.php?id=<?php echo $key['id']?> "> <button type="button">  Delete </button> </td>
            </tr>
        <?php endforeach ?>
      
    </table>
    <button>  <a href="insert.php"> Thêm </a> </button>