<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taxi</title>
</head>
<body>
    <?php
    // $sokm = 141;
    // $tien = 1;
    // echo " Số km đi là: $sokm";
   
    // if( $sokm <= 1) $tien = 15000;
    // else 
    //     if( 1 < $sokm && $sokm <= 5) $tien = 12000 * $sokm;
    //     else    
    //         if(  6<= $sokm && $sokm <140 ) $tien = 9000 * $sokm;
    //         else 
    //             if( $sokm >= 140) $tien = (900 * $sokm) - (900 * $sokm)*12/100;
    // print "\n So tien phai tra la: $tien ";

    // Dùng hàm tính toán.
    
    function TinhTienKm($sokm)
    {   $tien = 1;
        if( $sokm <= 1) $tien = 15000;
        else 
            if( 1 < $sokm && $sokm <= 5) $tien = 12000 * $sokm;
            else    
                if(  6<= $sokm && $sokm <140 ) $tien = 9000 * $sokm;
                else 
                    if( $sokm >= 140) $tien = (900 * $sokm) - (900 * $sokm)*12/100;
        print "\n So tien phai tra la: $tien ";
    }

    TinhTienKm(5);
   
    ?>
</body>
</html>