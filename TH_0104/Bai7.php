<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px">
        <tr>
        <?php
        $k=0;
        for($i = 1; $i <= 5; $i ++) {
            echo "<td>";
            for($j = 1; $j <= 5; $j ++) {
                echo ($k*$j*$i);   
            }
            echo "</td>";
        }
        ?>
        </tr>
        </table>
</body>
</html>