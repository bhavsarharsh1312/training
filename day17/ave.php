<?php
echo "The Orignal array is: <br>";
$a=array("1"=>"Harsh","3"=>"Yash","4"=>"Nikhil","2"=>"Vivek");
echo "<pre>";
print_r($a);
echo "After sorting...<br>";
ksort($a);
echo "<pre>";
print_r($a);

?>
