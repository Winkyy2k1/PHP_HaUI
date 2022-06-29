<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TH0104_ bài 4</title>
</head>
<body>
    <?php
        function ChuyenDiem($d)
        {   echo "Diem la $d";
            if($d <= 3.9 && $d >=0)
                $chu = "F";
            else
            if($d <= 4.6 )
                $chu = "D";
            else
            if($d <= 5.4 )
                $chu = "D+";
            else
            if($d <= 6.1 )
                $chu = "C";
            else
            if($d <= 6.9 )
                $chu = "C+";
            else
            if($d <= 7.6 )
                $chu = "B";
            else
            if($d <= 8.4 )
                $chu = "B+";
            else
            if($d <= 10 )
                $chu = "A";
            
                return $chu;
        }

        $kq=ChuyenDiem(8.4);
        echo " co diem chu la: $kq"; 
    ?>
</body>
</html>