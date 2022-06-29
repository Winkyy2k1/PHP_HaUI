<?php
    $M = array(
        "A"=>array("1","1","1"),
        "B"=>array("0","0","1"), 
    );
    $N = array();
    for ($row = 0; $row <=2 ; $row++) {
        echo "<p><b>Số dòng $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
          echo "<li>".$M[$row][$col]."</li>";
        }
        echo "</ul>";
      }
?>