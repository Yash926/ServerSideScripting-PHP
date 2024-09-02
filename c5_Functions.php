<!-- A function is a self-contained block of code to perform a specific task. -->
 <?php
 function sum($a,$b)
 {
    echo ($a+$b);
 }
 sum(3,4);
 
 //loosely typed language //works well on w3compiler
//  function add(int $a,int $b)
//  {
//     echo ($a+$b);
//  }
//  sum(3,"3 semesters");

 //default argument value
 function setch(int $child=0)
 {
    echo "Total no of children are : $child <br>" ;
}
setch();
 
 ?>