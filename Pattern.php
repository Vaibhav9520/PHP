<?php
    // $n = 5;
    // echo "Pattern Printing: <br>";
    // for($i=0;$i<=$n;$i++){
    //     for($j=0;$j<$i;$j++){
    //         echo "*";
    //     }

    //     echo "<br>";
    // }
    $n = 5;

    echo "Left Pattern Printing: <br>";
    for ($i = 1; $i <= $n; $i++) {
        // Print spaces
        for ($j = 1; $j <= $n - $i; $j++) {
            echo "&nbsp&nbsp";
        }
        // Print stars
        for ($j = 1; $j <= $i; $j++) {
            echo "1";
        }
        echo "<br>"; 
    }
?>
