<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Máy tính với + - * / </title>
</head>
<body>
   <?php 
    // Coi là dùng 4 phép tính với 2 số có sẵn không dùng hàm
    // $a = 5;
    // $b = 3;
    // $pheptinh = "/";
    // $kq;
    // switch($pheptinh)
    // {
    //     case "+" :
    //         {
    //             $kq = $a + $b;
    //             echo " Kết quả cua phep $pheptinh là $kq";
    //             break;
    //         }
    //     case "-" :
    //         {
    //             $kq = $a - $b;
    //             echo " Kết quả cua phep $pheptinh là $kq";
    //             break;
    //         }
    //     case "*" :
    //         {
    //             $kq = $a * $b;
    //             echo "Kết quả cua phep $pheptinh là $kq";
    //             break;
    //         }
    //     case "/" :
    //         {
    //             $kq = $a / $b;
    //             echo " Kết quả cua phep $pheptinh là $kq";
    //             break;
    //         }
    //     default :
    //     {
    //        echo " Phép tính không hợp lệ." ;
    //     }        
    // }

    // Dùng hàm tinh toán
    function TinhToan($a, $b, $pheptinh)
    {
            switch($pheptinh)
        {
            case "+" :
                {
                    $kq = $a + $b;
                    echo " Kết quả cua phep $pheptinh là $kq";
                    break;
                }
            case "-" :
                {
                    $kq = $a - $b;
                    echo " Kết quả cua phep $pheptinh là $kq";
                    break;
                }
            case "*" :
                {
                    $kq = $a * $b;
                    echo "Kết quả cua phep $pheptinh là $kq";
                    break;
                }
            case "/" :
                {
                    $kq = $a / $b;
                    echo " Kết quả cua phep $pheptinh là $kq";
                    break;
                }
            default :
            {
            echo " Phép tính không hợp lệ." ;
            }        
        }
    }

    TinhToan(1,2,"yu");
    
   ?>
</body>
</html>