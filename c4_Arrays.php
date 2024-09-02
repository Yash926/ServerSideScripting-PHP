<?php
//indexed Array
$courses=array("PHP","Laravel","Node.js","C++","Java");
echo "I Like "$courses[0].".".$courses[1]." and". $courses[2 ];
$courses_length=count($courses);
for($x=0;$x<$courses_length;$x++)
{
    echo $courses[$x];
    echo "<br>";
}

//Associative Array

$course1=array("INT220"=>"PHP","INT221"=>"Laravel","INT222"=>"Node JS");
echo "INT220 is ".$course1['INT220'].". INT221 is ".$course1['INT221']. ". INT222 is ".$course1['INT222'];

$course2["INT220"]="PHP";
$course2["INT221"]="Laravel";
$course2["INT222"]="Node js";
echo "<br>";
print_r($course2);

//MultiDimensional Array
// $result=array(
//     array("Manoj",7.8,"Pass"),
//     array("Aditya",8.8,"Pass"),
//     array("Anuj",4.9,"Pass"),
// );$

?>




