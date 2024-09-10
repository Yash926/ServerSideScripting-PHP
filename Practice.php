 <?php
// function btd($binary)
// {
//     $d=0;
//     $l=strlen($binary);
//     for($i=0;$i<$l;$i++)
//     {
//         $d+=$binary[$i]*pow(2,$l-$i-1);
//     }
//     return $d;


// }
// echo btd("1111"); 



// function dtb($decimal)
// {
//     return decbin($decimal);

// }
// echo "Binary is : ".dtb(13);



// $num=1;  
// $total=0;  
// $x=$num;
// $y=$num;
// $d=0; 
// while ($y!=0)
// {
// $d+=1;
// $y=$y/10;
// }
// while($x!=0)  
// {  
// $rem=$x%10;  
// $total=$total+pow($rem,$d);  
// $x=$x/10;  
// }  
// if($num==$total)  
// {  
// echo "Yes it is an Armstrong number";  
// }  
// else  
// {  
// echo "No it is not an armstrong number";  
// }  


// function findMissingNumbers($arr, $n) {
//     $missing = array();
//     for ($i = 1; $i <= $n; $i++) {
//         if (!in_array($i, $arr)) {
//             $missing[] = $i;
//         }
//     }
//     return $missing;
// }

// $array = [1, 2, 4, 6];
// $missingNumbers = findMissingNumbers($array, 8);
// print_r($missingNumbers);



// function printNonRepeated($arr) {
//     $count = array_count_values($arr);
//     foreach ($count as $key => $value) {
//         if ($value == 2) {
//             echo $key . " ";
//         }
//     }
// }

// $array = [1, 2, 2, 3, 4, 4, 5];
// printNonRepeated($array);

// $s = 'string';
// $i = 0;
// while (isset($s[$i])) {
//     $i++;
// }
// print $i;


function countchars($s)
{
    $chars=str_split($s);
    $count=array_count_values($chars);
    foreach($count as $chars => $occurrence)
    {
        echo " $chars occurs $occurrence times <br>";
    }
}
$s="Yash";
countchars($s);

?>