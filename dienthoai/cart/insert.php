
<?php
if($action="insert")
{
$hoten=$_POST['hoten'];
$dienthoai=$_POST['dienthoai'];
$diachi=$_POST['diachi'];
$email=$_POST['email'];
$phuongthuc=$_POST['phuongthuc'];
$ngay=date('Y-m-d');
		if(isset($_SESSION['idnd'])){
		
		
			$sql=mysqli_query(mysqli_connect("localhost","root","","dienthoai"),"select * from nguoidung where idnd='".$_SESSION['idnd']."'");
			$row=mysqli_fetch_array($sql);
			
			$idnd=$row['idnd'];
	
$sql="INSERT INTO hoadon(idnd,hoten,diachi,dienthoai,email,ngaydathang,trangthai) VALUES 
('$idnd','$hoten', '$diachi', '$dienthoai', '$email', '$ngay','1')";

}
	else 
	$sql="INSERT INTO hoadon(hoten,diachi,dienthoai,email,ngaydathang,trangthai) VALUES 
('$hoten', '$diachi', '$dienthoai', '$email', '$ngay','1')";

	mysqli_query(mysqli_connect("localhost","root","","dienthoai"),$sql);
	
    $mahd=mysql_insert_id();
	
    foreach($_SESSION['cart'] as $stt => $soluong)
            {
               $sql="select * from sanpham where idsp=$stt";
               $rows=mysqli_query(mysqli_connect("localhost","root","","dienthoai"),$sql);
               $row=mysqli_fetch_array($rows);
               //$mahd=$row['mahd'];
               $tensp=$row['tensp'];
        
               $gia=$row['gia']*((100-$row['khuyenmai1'])/100);
               $sql1 ="insert into chitiethoadon(mahd,Tensp,Soluong,gia,phuongthucthanhtoan) values('$mahd','$tensp','$soluong','$gia','$phuongthuc')";
              mysqli_query(mysqli_connect("localhost","root","","dienthoai"),$sql1);
              
            }
    foreach($_SESSION['cart'] as $stt => $soluong)
            {
               
               $sql="select * from sanpham where idsp=$stt";
               $rows=mysqli_query(mysqli_connect("localhost","root","","dienthoai"),$sql);
               $row=mysqli_fetch_array($rows);
               $ban=$row['daban']+$soluong;
               $sql="UPDATE sanpham SET daban='$ban' WHERE idsp = $stt";
               
                mysqli_query(mysqli_connect("localhost","root","","dienthoai"),$sql);
            }

unset($_SESSION['cart']);
}
?>
<!--<font color="red" size="5"><center>????n h??ng c???a b???n ???? thi???t l???p th??nh c??ng ch??ng t??i s??? chuy???n h??ng cho b???n trong th???i gian s???m nh???t</center></font>
<center><a href="index.php">Tr??? v??? trang ch???</a></center> 
-->
<?php 
echo "
							<script language='javascript'>
								alert('????n h??ng c???a b???n ???? thi???t l???p th??nh c??ng ch??ng t??i s??? chuy???n h??ng cho b???n trong th???i gian s???m nh???t');
								window.open('index.php','_self',3);
							</script>
						";
?>
