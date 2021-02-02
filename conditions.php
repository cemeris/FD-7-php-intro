<?php
    $greating = "Hello world";
    $value = 1;
?>

<h1><?php
    if ($value === 1) {
        echo $greating;
    }
    elseif ($value === 2) {
        echo "Hello Riga";
    }
    else {
        echo "Hello Latvia";
    }
?></h1>