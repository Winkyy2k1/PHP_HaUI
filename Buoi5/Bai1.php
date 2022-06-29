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
        $a[] = array ();
        for( $i =0; $i < 10 ; $i++)
        {
            $a[$i] = rand(1,100);
        }
        // Hiện mảng
        echo "Mảng vừa tạo mới là: ";
        foreach ($a as $key ) {
           echo " " .$key;
        }
        
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

        $dem =0;
        foreach ($a as $key ) {
          if( Ktra($key))
          { $dem ++;}
        }

        if( $dem == 0 ) echo "<br> Mảng không có số nguyên tố nào.";
        else
            {
                echo "<br> Mảng số nguyên tố là: ";
                foreach ($a as $key ) {
                    if( Ktra($key))
                    {  echo " " .$key;}
                  }
            }
    ?>
</body>
</html>