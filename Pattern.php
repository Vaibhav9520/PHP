<?php
    // $n = 5;
    // echo "Pattern Printing: <br>";
    // for($i=0;$i<=$n;$i++){
    //     for($j=0;$j<$i;$j++){
    //         echo "*";
    //     }

    //     echo "<br>";
    // }
    // $n = 5;

    // echo "Left Pattern Printing: <br>";
    // for ($i = 1; $i <= $n; $i++) {
    //     // Print spaces
        
    //     for ($j = 1; $j <= $n - $i; $j++) {
    //         echo "&nbsp&nbsp";
    //     }
    //     // Print stars
    //     for ($j = 1; $j <= $i; $j++) {
    //         echo "*";
    //     }
    //     echo "<br>"; 
    // }


    const n = 5;
    echo "Right Pattern Printing: <br>";

    for($i=0;$i<n;$i++){
        for($j=0;$j<$i+1;$j++){
            echo "* ";
        }
        echo"<br>";
    }

    echo"<br>";
    echo"<br>";
    echo "Left Pattern Printing: <br>";

    for($i=0;$i<n;$i++){
        for($j=0;$j<n-$i-1;$j++){
            echo "&nbsp&nbsp&nbsp";
        }
        for($j=0;$j<$i+1;$j++){
            echo "* ";
        }
        echo"<br>";
    }


    echo"<br>";
    echo"<br>";

    echo "ABCD Patern: <br>";

    for($i=0;$i<n;$i++){
        $ch = 'A';
        for($j=0;$j<$i+1;$j++){
            echo $ch." ";
            $ch = chr(ord($ch)+1);
        }
        echo"<br>";
    }
    
    echo"<br>";
    echo"<br>";

    echo "Number Pattern: <br>";
    for($i=0;$i<n;$i++){
        $num = 1;
        for($j=0;$j<$i+1;$j++){
            echo $num." ";
            $num++;
        }
        echo "<br>";
    }

    echo"<br>";
    echo"<br>";

    $superhero = [
        'name' => 'Vaibhav singh',
        'email' => 'vaibhavsingh01080@gmail.com',
        'age' => 20,
    ];

    foreach($superhero as $key => $value){
        echo $key.": ".$value."<br>";
    }

    echo"<br>";
    echo"<br>";

    echo "Table of 2:<br>";

    $m = 2;
    for($i=1;$i<=10;$i++){
        echo $m." * ".$i." = ".($m*$i)."<br>";
    }
    

    
    echo"<br>";
    echo"<br>";

    function fibb($n){
    echo "Fibbonacci Number: ";

    $a = 0;
    $b = 1;

    echo $a." ";
    for($i=0;$i<$n;$i++){
        echo $b." ";

        $next = $a + $b;

        $a = $b;
        $b = $next;
    }

    }

    fibb(10);
    echo"<br>";
    echo"<br>";

    function fact($n){
        echo "Factorial of ".$n." Printing: ";

        $fact = 1;
        for($i=1;$i<=$n;$i++){
            $fact *= $i;
        }
        echo $fact;
    }
    fact(5);


?>
