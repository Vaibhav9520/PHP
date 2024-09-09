<?php
// $books = array("English", "Science", "Maths");
//to print the array
// print_r($books);        
 
// to count array element
// echo "Total element in this array: ". count($books);

// echo implode(", ", $books); 

//To push the element at starting
// array_push($books,"History");

//To push at the starting to the array;
// array_unshift($books,"History");

//to pop the element at end
// array_pop($books);

//to pop the element at starting
// array_shift($books);

//to flip the array
// array_flip($books);

//to reverse the array
// $array2 = array_reverse($books);
// // print_r($books);
// echo implode(", ", $books); 
// echo "__________";
// echo implode(", ", $array2); 

$book1 = array("English", "Science", "Maths");
$book2 = array("History","Geography");
$book3 = array_merge($book1,$book2);

echo "In assending order: ";
$book4 = sort($book3);
echo implode(", ",$book3);

echo ". In dessending order: ";
$book4 = rsort($book3);
echo implode(", ",$book3);

?>
