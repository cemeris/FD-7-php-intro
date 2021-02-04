<?php

function addButton($number, $order) {
    $output = $number;

    if ($number % $order == 0) {
        echo '<button class="btn success">' . $output . '</button>';
    }
    else {
        echo '<button class="btn">' . $output . '</button>';
    }
}

function addMultipleButtons($start, $end, $order) {
    addButton($start, $order);

    if ($start < $end) {
        addMultipleButtons($start + 1, $end, $order);
    }
}
