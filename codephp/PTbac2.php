<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Giải pt bậc 2</title>
</head>
<body>
    <?php 
        $a=1;
        $b=2;
        $c=3;
        print "Giải pt bậc 2 \n ";
            $denta = $b*$b - 4*$a*$c;
            print "<br>";
        if( $a==0 )
            {  $x=-$c/$b;
                print " Pt có nghiệm là: $x";
            }
        else
        {
            if ($denta < 0) echo "Pt vô nghiệm";
                else 
                if ($denta == 0) 
                        {   $x = -$b/2*$a;
                            echo "Pt có ng kép là: $x";
                        }
                else {
                    $x1= ( -$b + sqrt($denta))/( 2*$a);
                    $x2= ( -$b - sqrt($denta))/( 2*$a);
                    print "Pt có 2 ng phân biệt là: $x1 và $x2";
                }
        }
    ?>
</body>
</html>