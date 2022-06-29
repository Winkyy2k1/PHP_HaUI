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
        // Ktra tra 1 số có phải số nguyên tố , dùng câu lệnh do while
       {
        $dem = 0; $i=1; $n = 7;
        do{
                if( $n % $i == 0)
                        $dem ++;
                        $i++;    
        } while( $i <= $n/2 );
        echo "Biến đếm: $dem .";
       }
        if( (int)$dem >= 2) echo " Số $n không là số nguyên tố";
            else echo " Số $n là số nguyên tố";
    ?>
</body>
</html>