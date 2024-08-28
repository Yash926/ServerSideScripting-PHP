<?php
//array_combine
$name=array("Manoj","Rahul","Aneesh","Yash");
$marks=array("75","89","44","90");
$c=array_combine($name,$marks);
print_r($c);
echo "<br>";

// array_chunk-splits an array into chunks of new arrays
print_r(array_chunk($name,3));

echo "<br>";
//array_count_values-function counts all the values of an array.
$a=array("Block 33","Block 34","Block 34","Block 36","Block 36");
print_r(array_count_values($a));
echo "<br>";

//Array_diff
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$result=array_diff($a1,$a2);
print_r($result);
?>