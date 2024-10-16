<?php

    $arr = array(2,3,4,5,6,7,8,9);
    print_r($arr);
    echo "<br>";

    $arrrev = array_reverse($arr);

    echo "After reversing the output array: <br>";
    print_r($arrrev);

    echo "<br>-----------------------------------------<br>";


    function gcd($num1, $num2) {
        while ($num2 != 0) {
            $temp = $num2;
            $num2 = $num1 % $num2;
            $num1 = $temp;
        }
        return $num1;
    }
    $num1 = 20;
    $num2 = 25;
    $num3 = gcd($num1,$num2);

    
    echo "Value of \$num1 : " . $num1 . "<br>";  
    echo "Value of \$num2 : " . $num2 . "<br>"; 
    echo "Value of GCD is " .$num3;
    
?>
