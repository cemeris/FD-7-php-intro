<?php

function addButton($number) {
    $output = $number % 3;
    echo '<button class="success">' . $output . '</button>';
}

function addMultipleButtons($start, $end) {
    addButton($start);

    if ($start < $end) {
        addMultipleButtons($start + 1, $end);
    }
}
