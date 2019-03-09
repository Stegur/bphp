<?php

function generate($rows, $placesPerRow, $avaliableCount) {

    $places = [];
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $placesPerRow; $j++) {
            $places[$i][$j] = false;
        }
    }

    if ($rows * $placesPerRow > $avaliableCount) {
        return false;
    } else {
        return $places;
    }

}

function reserve($map, $row, $place) {

    if (empty($map[$row - 1][$place - 1])) {
        $map[$row - 1][$place - 1] = true;
        return true;
    } else {
        return false;
    }

}


$chairs = 50;
$map = generate(5, 8, $chairs);
$requireRow = 3;
$requirePlace = 5;

$reverve = reserve($map, $requireRow, $requirePlace);
logReserve($requireRow, $requirePlace, $reverve);

$reverve = reserve($map, $requireRow, $requirePlace);
logReserve($requireRow, $requirePlace, $reverve);


function logReserve($row, $place, $result){
    if ($result) {
        echo "Ваше место забронировано! Ряд $row, место $place".PHP_EOL;
    } else {
        echo "Что-то пошло не так=( Бронь не удалась".PHP_EOL;
    }
}


// Задача 2

function reserveGroup($count, $map){

    for ($i = 0; $i < 5; $i++) {
        echo '<pre>';
        var_dump($map[$i]);
    }

}


reserveGroup(3, $map);

