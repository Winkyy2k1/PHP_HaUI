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
     function GiaiThua($n)
     {
         if( $n==0) return 1;
         else return ($n*GiaiThua($n-1));
     }

     function TinhS( $x , $n)
     {     $S = $x;
         for( $i=1; $i<$n; $i++)
         {   
            $S += (pow(-1,$i)*(pow($x,(2*$i+1)))) / (GiaiThua(2*$i + 1));    
         }
            return $S;
     }

     $kq = TinhS(3, 4);
     echo "S=  $kq";

    ?>
</body>
</html>