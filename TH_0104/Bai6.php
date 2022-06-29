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

        function ChuyenSo($n, $b)
        {
            if($n<0 || $b < 2 || $b > 16)
                echo " Khong thuc hien chuyen duoc!";
            
            $result = ""; // kết quả
            $chuyen = 0;
            $chiadu = $n;

            while ($chiadu > 0)
            {
                if( $b > 10 )
                {
                    $chuyen = $chiadu % $b;
                    if($chuyen >= 10)
                    {
                        switch ($chuyen)
                        {
                            case 10 : { $result = "A" ; break; }   
                            case 11 : { $result = "B" ; break; }   
                            case 12 : { $result = "C" ; break; }   
                            case 13 : { $result = "D" ; break; }   
                            case 14 : { $result = "E" ; break; }   
                            case 15 : { $result = "F" ; break; }   
                        }
                    }
                    else {
                       // $result = $result.$m;
                    }
                }
                else 
                {
                    $result = $chiadu % $b;
                }
                $chiadu = floor(($chiadu/$b)); // hàm làm tròn
            }
            return strrev($result); 
        }

        $kq=ChuyenSo(10,2);
        echo "So chuyen he la: $kq"
    ?>
        
</body>
</html>