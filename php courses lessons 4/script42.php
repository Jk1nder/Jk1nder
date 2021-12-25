<?php
define("M", 9);
define("N", 8);

 for($i = 0; $i < M; $i++){
        for($j = 0; $j < N; $j++){
            $array[$i][$j] = rand();
        }
    }

    for($i = 0; $i < M; $i++){
        for($j = 0; $j < N; $j++){
           echo $array[$i][$j];
           echo " ";
        }

        echo "<br>";
    }

?>
