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
    function SoHoanHao($n)
    {
        $sum=0;
        for($i=1; $i<=$n/2; $i++)
        {
            if($n%$i==0)
                $sum+=$i;
        }
        if($sum == $n) return true;
        return false;
    } 

    for($i=0; $i<1000; $i++)
    {
        if(SoHoanHao($i))
        echo "  $i ";
    }
    ?>

</body>
</html>