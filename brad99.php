<?php

?>
<table border='1' width='100%'>
    <?php
    define("ROWS", 4);
    define("FROM", 1);
    define("TO", 5);

    for ($k = 0; $k < ROWS; $k++){
        echo '<tr>';
        for ($j = FROM; $j<=TO; $j++){
            echo '<td bgcolor="pink">';
            $newj = $j + (TO-FROM+1) * $k;
            for ($i = 1; $i<=9; $i++ ){
                $r = $newj * $i;
                echo "{$newj} x {$i} = {$r}<br>";
            }
            echo '</td>';
        }
        echo '</tr>';
    }
    ?>
</table>