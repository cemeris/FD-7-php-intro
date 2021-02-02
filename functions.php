<?php

function addButton($number) {
    echo '<button class="success">' . $number % 3 . '</button>';
}

function addMultipleButtons($start, $end) {
    addButton($start);

    if ($start < $end) {
        addMultipleButtons($start + 1, $end);
    }
}