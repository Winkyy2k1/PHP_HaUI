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
        // Ktra tra 1 số có phải số nguyên tố k dùng do while
        function Ktra ($n)
        {
            if( $n <= 1){ return false;}
            else
            for( $i=2; $i<=sqrt($n); $i++)
            {
                if( $n % $i == 0)
                    {return false ;}
            }
            return true;
        }
        $n = 15;
        print " Dãy nguyên tố nhỏ hơn $n là:";
        for( $i=0; $i<$n; $i++)
        {
            if(Ktra($i))
            print " $i   " ;
        }
    ?>
</body>
</html>