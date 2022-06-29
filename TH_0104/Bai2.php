<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tính exp(x) voiws sai số e </title>
</head>
<body>
    <?php 
    function GiaiThua($n)
    {
        if( $n==0) return 1;
        else return ($n*GiaiThua($n-1));
    }
    function Tinh($x, $e)
    {   
        $S=1; 
        $i=1;
        do{
            $S += pow($x,$i)/GiaiThua($i);
            $i++;

        } while ( pow($x,$i)/GiaiThua($i) > $e);
        return $S;
    }
    $kq = Tinh(1, 0.000000000001);
    echo "Kết quả là : S=  $kq";
    ?>  
</body>
</html>