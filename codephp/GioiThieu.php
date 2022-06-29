
    <?php
        echo 'Xin chào các bạn!' ; 
        print "<br>";
        echo "Tôi là Hải - Sv IT5" ;
        print "<br>";
        // Tính diên tích hình tròn.
        $r=4; // bán kính hình tròn.
        $dt = $r*$r*M_PI;
        echo "Dien tích hinh tron ban kinh $r la: $dt"  ;
        // Giải pt bậc 2 khi biết 3 số a,b,c
        $a=3;
        $b=2;
        $c=-9;
    
            $denta= $b*$b - 4*$a*$c;
            print "<br>";

        if ($denta < 0) print "Pt vô nghiệm";
        
        else if ($denta == 0) print "Pt có ng kép";
        else print "Pt có 2 ng phan biệt";

    ?>
