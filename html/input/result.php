<?php

    $row = $_POST['row'];
    $col = $_POST['col'];
    
    $number = 1;

    $table = "<center><table border=1>";

    for($i=0; $i<$row; $i++)
    {
        $table = $table."<tr>";

        for($j=0; $j<$col; $j++)
        {
            $table = $table."<td>".$number."</td>";
            $number++;
        }

        $table = $table."</tr>";

    }
    $table = $table."</table></center>";

    echo $table;


?>