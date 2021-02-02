<?php

function addButton($number) {
    $output = $number % 3;

    if ($number % 4 == 0) {
        echo '<button class="success">' . $output . '</button>';
    }
    else {
        echo '<button>' . $output . '</button>';
    }
}

function addMultipleButtons($start, $end) {
    addButton($start);

    if ($start < $end) {
        addMultipleButtons($start + 1, $end);
    }
}
