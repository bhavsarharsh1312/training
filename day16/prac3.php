<?php
    for ($i=0; $i <= 10 ; $i++)
    {
        echo " The Number is: $i <br>";
    }
    echo"<br>";
    $color = array("Green", "Pink", "Blue", "Yellow");
    foreach ($color as $value)
    {
        echo "$value <br>";
    }
    echo"<br>";
    $age = array("Om" => "21", "Ridham C" => "18", "Dhruvin" => "19");
    foreach ($age as $x => $val)
    {
        echo "$x = $val <br>";
    }
?>