<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính thuế </title>
</head>
<body>
    <?php 
        
        function TinhThue($thuNhap, $phuThuoc)
        {   echo " Thu nhập là: $thuNhap triệu. ";
            echo " Số người phụ thuộc là: $phuThuoc. ";
           
            $tienNop= 0;
            $tienTinhThue = $thuNhap - 12*( 11 + $phuThuoc*4.5);
            if( $tienTinhThue>=0 && $tienTinhThue <=100)
                {
                    $tienNop =  $tienTinhThue*5/100;
                }
            else 
            if( $tienTinhThue>100 && $tienTinhThue <=200)
            {
                $tienNop = $tienTinhThue*10/100;
            }
            else 
            if( $tienTinhThue>200 && $tienTinhThue <=300)
            {
                $tienNop = $tienTinhThue*15/100;
            }
            else
            $tienNop = $tienTinhThue*20/100;
            return $tienNop;
        }
        $kq= TinhThue(250, 0); 
        if( $kq <= 0) echo " Bạn không cần nộp thuế ";
        else
            echo "Tiền thuế phải nộp là: $kq triệu" ;
    ?>
</body>
</html>