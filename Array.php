<?php
// By for each loop
// $courses = array('INT220'=>'PHP', 'INT221'=>'Laravel', 'INT222'=>'Node.js');
// foreach($courses as $course) {
//     echo $course . "<br>";
// }

//by for loop


// $courses = array('INT220' => 'php', 'INT221' => 'Laravel', 'INT222' => 'Node.js');
// $keys = array_keys($courses);

// for($x = 0; $x < count($courses); $x++) {
//     echo $courses[$keys[$x]] . "<br>";
// }

$courses = array('INT220'=>'PHP', 'INT221'=>'Laravel', 'INT222'=>'Node.js');
foreach($courses as $course => $value) {
    echo "Key = ".$course.","."Value = ".$value;
    echo "<br>";
}
?>

