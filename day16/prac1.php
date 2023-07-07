<?php
    $x = "123.acb";
    echo "<br>";
    echo "a =".$x;
    echo "<br>";
    echo "Type of a is ".gettype($x);
    echo "<br>";
    settype($x, "int");
    echo "<br> After conversion,<br> the type of a is ".gettype($x);
?>
