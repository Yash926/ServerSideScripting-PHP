<?php
function multiply($m1,$m2)
{
    $r=array();
    for($i=0;$i<count($m1);$i++)
    {
        for($j=0;$j<count($m2[0]);$j++)
        {
            $r[$i][$j]=0;
            for($k=0;$k<count($m2);$k++)
            {
                $r[$i][$j]+=$m1[$i][$k]*$m2[$k][$j];
            }
        }
    }
    return $r;
}

$a=array(array(1,2),
array(3,4)
);
$b=array(array(5,6),
array(7,8)
);

$r=multiply($a,$b);
echo "<h1>Resultant matrix after multiplication </h1><br> ";

echo "<h3>";
for ($i = 0; $i < count($r); $i++)
{
    for ($j = 0; $j < count($r[0]); $j++)
    {
        echo ($r[$i][$j]);
        echo(" ");
    }
    echo ("<br>");
}

?>