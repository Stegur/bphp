<?php

// Первая

function correctDate($date) {
    $newDate = date("H:i y.d.m", strtotime($date));
    echo $date . " => " . $newDate;
}

$date = date("d-m-Y H:i:s");
correctDate($date);