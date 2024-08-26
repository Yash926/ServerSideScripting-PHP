<?php
$i=1;
// while($i<=3){
//     $i++;
//     echo "The number is ".$i."<br>";
// }

// do while
// do{
//     $i++;
//     echo "the number is $i <br>";
// }
// while($i<=3);

//For each loop

$colors=array("red","green","blue");
foreach($colors as $value)
{echo "$value <br>";
}

//break

for($i=1;$i<=10;$i++)
{
    echo "$i <br>";
    if($i==5)
    {
        break;
    }
}
?>
