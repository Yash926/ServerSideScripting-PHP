<!-- 
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


// function countchars($s)
// {
//     $chars=str_split($s);
//     $count=array_count_values($chars);
//     foreach($count as $chars => $occurrence)
//     {
//         echo " $chars occurs $occurrence times <br>";
//     }
// }
// $s="Yash";
// countchars($s); -->

<?php
// $a=array(
//     array(1,2,3),
//     array(4,5,6),
//     array(7,8,9)
// );
// $rows=count($a);
// $cols=count($a[0]);

// // $t=array_fill(0,$cols,array_fill(0,$rows,0));

// for($i=0;$i<$cols;$i++)
// {
//     for($j=0;$j<$rows;$j++)
//     {
//         $t[$i][$j]=0;
//         $t[$i][$j]=$a[$j][$i];
//     }
// }

// for($i=0;$i<$cols;$i++)
// {
//     for($j=0;$j<$rows;$j++)
//     {
//        print($t[$i][$j]." ");
//     }
//     echo "<br>";
// }


// function multiply($m1,$m2)
// {
//     $r=array();
//     for($i=0;$i<count($m1);$i++)
//     {
//         for($j=0;$j<count($m2[0]);$j++)
//         {
//             $r[$i][$j]=0;
//             for($k=0;$k<count($m2);$k++)
//             {
//                 $r[$i][$j]+=$m1[$i][$k]*$m2[$k][$j];
//             }
//         }
//     }
//     return $r;
// }

// $a=array(array(1,2),
// array(3,4)
// );
// $b=array(array(1,2),
// array(3,4)
// );

// $r=multiply($a,$b);
// for ($i = 0; $i < count($r); $i++)
// {
//     for ($j = 0; $j < count($r[0]); $j++)
//     {
//         echo ($r[$i][$j]);
//         echo(" ");
//     }
//     echo ("<br>
// ");
// }



// PHP program to multiply two 
// square matrices.
// This function multiplies mat1[][] and 
// mat2[][], and stores the result in res[][]
// function multiply(&$mat1, &$mat2, &$res)
// {
//     $N = 2;
//     for ($i = 0; $i < $N; $i++)
//     {
//         for ($j = 0; $j < $N; $j++)
//         {
//             $res[$i][$j] = 0;
//             for ($k = 0; $k < $N; $k++)
//                 $res[$i][$j] += $mat1[$i][$k] * 
//                                 $mat2[$k][$j];
//         }
//     }
// }
// // Driver Code
// $mat1 = array(array(1, 1),
//               array(2, 2),
//               );
// $mat2 = array(array(1, 1),
//               array(2, 2),
//               );
// multiply($mat1, $mat2, $res);
// $N = 2;
// echo ("Result matrix is 
// ");
// for ($i = 0; $i < $N; $i++)
// {
//     for ($j = 0; $j < $N; $j++)
//     {
//         echo ($res[$i][$j]);
//         echo(" ");
//     }
//     echo ("
// ");
// }




function invertedHalfPyramid($n) {
    for ($i = $n; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo "<br>";
    }
}

invertedHalfPyramid(5);
?>

