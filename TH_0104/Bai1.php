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
    function TinhTien($dau, $cuoi) // chi so dau, chi so cuoi
    {
        $sodien = $cuoi - $dau;
        echo "Số điện tiêu thụ là: $sodien";
        define("VAT", 1.1);
        if($sodien <= 50 )
            $tien = 50*1678 ;
        else
            if( $sodien <=100)
                 $tien = 50*1678  + ($sodien-50)*1734;
        else
            if( $sodien <=200)
                 $tien = 50*1678  + 50*1734 + ($sodien-100)*2014;
        else 
            if($sodien>200)
                $tien = 50*1678  + 50*1734 + 100*2014 + ($sodien-200)*2536;
        
        return $tien*VAT;
        
    }   
    $kq=TinhTien(1000,1134);
    echo " Tiền phải trả là: $kq";
    ?>

</body>
</html>