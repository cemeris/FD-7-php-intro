<?php
include "head.php";

$n1 = 5;
$n2 = 7;
$br = "<br>";
echo $n1;

echo $br;

echo $n1 + $n2;
echo "<br>";

function multiply($x, $y) {
    return $x * $y;
}

echo multiply($n1, $n2);

echo br();

function br() {
    return "<br>";
}


echo expon($n1, $n2);

function expon($x, $y) {
    if ($y > 0) {
        return $x * expon($x, $y - 1);
    }
    return 1;
}