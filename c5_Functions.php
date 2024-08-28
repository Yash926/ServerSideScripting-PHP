<!-- A function is a self-contained block of code to perform a specific task. -->
 <?php
 function sum($a,$b)
 {
    echo ($a+$b);
 }
 sum(3,4);
 
 //loosely typed language
 function add(int $a,int $b)
 {
    echo ($a+$b);
 }
 sum(3,"3 semesters");
 
 ?>