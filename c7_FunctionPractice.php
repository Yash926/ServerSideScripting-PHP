<?php
// function start($string)
// {
//     if($string<45)
//     {
//         return 20;
//     }
//     else{
//         return 40;
//     }
// }
// $t=start(90);
// if($t<20)
// {
//     echo "Have a good day!";
// }
// else{
//     echo "Have a good night";
// }


//every function should have unique name



function CalcAll($x,$y)
{
    echo ($x+$y);
    echo "<br>";
    echo ($x-$y);
    echo "<br>";
    echo ($x*$y);
    echo "<br>";
    echo ($x/$y);
    echo "<br>";
    echo ($x%$y);
}
$x=10;
$y=6;
// CalcAll();
CalcAll($x,$y);
?>