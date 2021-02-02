<?php

function addButton($number) {
    echo '<button>' . $number . '</button>';
}

function addMultipleButtons($start, $end) {
    addButton($start);

    if ($start < $end) {
        addMultipleButtons($start + 1, $end);
    }
}