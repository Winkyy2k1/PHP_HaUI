<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 

$soN = $_POST['soN'];
?>
<body>
    <form action="" method="POST">
        <table >
            <tr>
                <td> Nhập đầu vào: </td>
                <td> <input type="text" name="soN" >  </td>
               
            </tr>

            <tr> 
                <td> <button type="submit"> Tinh </button> </td>
                <td> <button type="reset"> Huỷ </button> </td>
            </tr>
        </table>
    </form>
    <?php
    // Tính tổng số n ( n lấy từ ô text); Hiện kết quả lên form

        $soN = $_POST['soN'];
        $Kq = 0;
            for($i=0; $i<=$soN ; $i++)
            {
                $Kq += $i;  
            }
      
        echo "Kết quả tong là: ". $Kq;
    // 

    // Mang mot chieu 
            $mang = array(4,9,2,5,0); // sawps xep mang tang dan, giam dan
            $kq2 = 0;
        for($i = 0; $i < sizeof($mang) ; $i++)
        {
            $kq2 += $mang[$i]; 
        }
        echo " tong Cac phan tu trong mang la: ". $kq2;
        echo "<br>";
     // Mang mot chieu 
        
        $mang = array(4,9,2,5,0); // sawps xep mang tang dan, giam dan
             echo "Cac phan tu trong mang la: ";
            for($i = 0; $i < sizeof($mang) ; $i++)
            {
               echo " " .$mang[$i];
            }
          
            for($i = 0; $i < sizeof($mang) ; $i++)
                for($j = $i+1 ; $j < sizeof($mang)-1 ; $j++)
                {
                    if( $mang[$i] < $mang[$j])
                    {
                        $tg = $mang[$i];
                        $mang[$i] = $mang[$j];
                        $mang[$j] = $tg;
                    }
                }
            echo "<br>";
            echo "Cac phan tu trong mang sau sap xep giam dan la: ";
            for($i = 0; $i < sizeof($mang) ; $i++)
            {
                echo " " .$mang[$i];
            }
           
            echo "<br>";
            echo " Chen them so 3 vao mang da sap xep: ";
           
            for($i = 1; $i < sizeof($mang) ; $i++)
            {   $bientam = $mang[$i]; 
                $j = $i -1;
                while($j>=0 && $mang[$j] < $bientam)
                {
                    $mang[$j+1] = $mang[$j];
                    $j--;
                }
                $mang[$j+1] = 3;
            }

            echo "Cac phan tu trong mang sau sap chen la: ";
            for($i = 0; $i < sizeof($mang) ; $i++)
            {
                echo " " .$mang[$i];
            }

    echo "<h2> Mang hai chieu </h2>";
            
    $mang2 = array(
        "A"=>array("1","2"),
        "B"=>array("3","4"),
        "C"=>array("5","6")    
    );
   
    ?>
        <table>
            <tr>
                <td> <?= $mang2["A"][0] ?> </td>
                <td> <?= $mang2["A"][1] ?> </td>
            </tr>
            <tr>
                <td> <?= $mang2["B"][0] ?> </td>
                <td> <?= $mang2["B"][1] ?> </td>
            </tr>
            <tr>
                <td> <?= $mang2["C"][0] ?> </td>
                <td> <?= $mang2["C"][1] ?> </td>
            </tr>
        </table>
    <?php
      foreach ($mang2 as $key => $value) {
            echo $key[0] . " ";
            echo $value[0] ." " .$value[1] . " <br>";
            
      }   
    ?>
</body>
</html>