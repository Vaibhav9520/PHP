<?php

    function MatrixMult($matrix1,$matrix2,$row1,$col1,$row2,$col2){
        $result = array();
        for($i=0;$i<$row1;$i++){
            for($j=0;$j<$col2;$j++){
                $result[$i][$j] = 0;
                for($k=0;$k<$col1;$k++){
                    $result[$i][$j] += $matrix1[$j][$k] * $matrix2[$k][$i]; 
                }
                
            }
        }
        return $result;
    }
    
    echo "Enter Number of Rows for First Matrix: ";
    $row1 = trim(fgets(STDIN));

    echo "Enter Number of Columns for First Matrix: ";
    $col1 = trim(fgets(STDIN));

    echo "Enter Number of Rows for Second Matrix: ";
    $row2 = trim(fgets(STDIN));

    echo "Enter Number of Columns for Second Matrix: ";
    $col2 = trim(fgets(STDIN));

    // Enter First Matrix Elements
    echo "Enter First Matrix elements:\n";
    $matrix1 = array();
    for($i = 0; $i < $row1; $i++) {
        for($j = 0; $j < $col1; $j++) {
            $matrix1[$i][$j] = trim(fgets(STDIN));
        }
    }

    // Enter Second Matrix Elements
    echo "Enter Second Matrix elements:\n";
    $matrix2 = array();
    for($i = 0; $i < $row2; $i++) {
        for($j = 0; $j < $col2; $j++) {
            $matrix2[$i][$j] = trim(fgets(STDIN));
        }
    }

    $result = MatrixMult($matrix1,$matrix2,$row1,$col1,$row2,$col2);


    // Display Multiplied Matrix
    echo "Multiplied Matrix:\n";
    for($i = 0; $i < $row1; $i++) {
        for($j = 0; $j < $col1; $j++) {
            echo $result[$i][$j] . " ";
        }
        echo "\n";
    }


?>
