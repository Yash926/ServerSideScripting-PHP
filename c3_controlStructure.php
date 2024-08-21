<?php
$num=12;
if($num<100)
{
    echo "$num is less than 100 <br>";
}
if($num%2==0)
{
    echo "$num is even number <br>";
}
$fruit="Apple";
if($fruit="Apple")
{
    echo "$fruit is a fruit <br>";
}
// Ternary Operator

echo ($num<18)?'less than 18':'More than 18 ';

//Nested if else

$age=23;
$nationality="Indian";
if($nationality="Indian")
{
    if($age>=18){
        echo "<br>";
        echo "Eligible to vote <br>";
    }
    else{
        echo "Not eligible to vote";
        
    }
}

// Switch case
$ch='i';
switch($ch)
{
    case 'a':
    echo "it is vowel";
    break;
    case 'e':
    echo "it is vowel";
    break;
    case 'i':
    echo "it is vowel";
    break;
    case 'o':
    echo "it is vowel";
    break;
    case 'u':
    echo "it is vowel";
    break;
    default:
    echo "It is a consonant";
}
?>