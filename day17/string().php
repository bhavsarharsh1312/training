<?php
$str = "Apple's Lab";
$result = addslashes($str);
echo $str ."<br>";
echo $result;
echo "<br>". "<br>";

$str1 = "Rakesh,Ramesh,Suresh,Mahesh";
$result1 = explode(',', $str1);
echo "<pre>";
print_r($result1);
echo "<br>". "<br>";

$str = "Hello world. It's a beatiful day";
print_r(explode(" ",$str));
echo "<pre>";
echo "<br>". "<br>";

$implode = implode(' ',$result1);
echo $implode;
echo "<br>". "<br>";

echo strpos("Hellooo.. hi Good Morning!","Hi");
echo "<br>". "<br>";

echo strlen("helloo..");
echo "<br>". "<br>";

echo stripos("Hello Hi Good Morning!","Hi");
echo "<br>". "<br>";

echo strrpos("Hello Hi Good Morning!","Hi");
echo "<br>". "<br>";

$htmlentity = "&lt;H&gt";
htmlentities($htmlentity);
echo $htmlentity;
echo "<br>"."<br>";
 
html_entity_decode($htmlentity);
echo $htmlentity;
echo "<br>"."<br>"."<br>";

$text = "THIS IS NICE TEXT";
echo lcfirst($text);
echo "<br>"."<br>"."<br>";

$psswrd = "Abc@123";
echo md5($psswrd);
echo "<br>"."<br>";

$psswrd = "Abc@123";
echo sha1($psswrd);
echo "<br>"."<br>";

$text ="   abc@123";
echo ltrim($text);
echo "<br>"."<br>";

$text ="   abc@123";
echo trim($text);
echo "<br>"."<br>";

$text ="   abc@123            ";
echo rtrim($text);
echo "<br>"."<br>";

$rtext = "helloooo";
$text2 = "Good morning";
echo str_replace("good",$rtext,$text2);

echo "<br>";

$amount = 1000;
$nmformat=number_format($amount,50);
echo $nmformat;