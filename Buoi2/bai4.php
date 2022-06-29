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
        $tong = 0;
        $n=4; // Tức S= 1! + 2! + 3! + 4!
        while ( $n!= 0)
        {   $S=1;
            for( $i = 1; $i<=$n; $i++)
            {
                $S=$S * $i;
            }
            $tong += $S; 
            $n = $n -1;
        }
        echo " Tong cua day giai thua la: ",($tong);
    ?>
</body>
</html>