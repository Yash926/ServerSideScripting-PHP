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

echo "<br>";
//Array_flip-function flips/exchanges all keys with their associated values in an array.
$result1=array_flip($a1);
print_r($result1);
echo "<br>";

//Array_intersect-function compares the values of 2 or more arrays, and returns the matches.
$a3=array("red","blue");
$result2=array_intersect($a1,$a2,$a3);
print_r($result2);
echo "<br>";

//Array_POP-function deletes the last element of an array.
$a4=array("red","blue","black");
array_pop($a3);
print_r($a4);
echo "<br>";

//array_reverse-returns an array in the reverse order
$a5=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r(array_reverse($a5));

echo "<br>";
//array_search-dearch an array for  a value and return the key.
echo array_search("Volvo",$a5);
echo "<br>";

//array_slice()-function returns selected parts of an array.

$a6=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
print_r(array_slice($a6,1,2));
echo "<br>";
print_r(array_slice($a6,1,2,true));
?>