<?php
$a=array(1,3,5,7,9,11);
echo"<pre>";
print_r($a);
$sum=0;
$s=count($a);
foreach($a as $value)
{
    $sum=$sum+$value;

}
$b =$sum/$s;
echo"Sum of the give sequence is: ".$sum;
echo "<br>";
print_r($b);
?>