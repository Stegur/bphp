<?php

$time = date("H");
$day = date("N");
//$time = 9;
//$day = 6;

switch ($day) {
    case 1:
        $day = "понедельник";
        break;
    case 2:
        $day = "вторник";
        break;
    case 3:
        $day = "среда";
        break;
    case 4:
        $day = "четверг";
        break;
    case 5:
        $day = "пятница";
        break;
    case 6:
        $day = "суббота";
        break;
    case 7:
        $day = "воскресенье";
        break;
}

if ($day <= 3 && $time >= 9 && $time < 18) {
    $schedule = "<br><br> Это лучший день, чтобы обратиться в Horns&Hooves! <br> Мы работаем для Вас до 18.00";
} elseif ($day <= 5 && $time >= 10 && $time < 18) {
    $schedule = "<br><br> Это лучший день, чтобы обратиться в Horns&Hooves! <br> Мы работаем для Вас до 18.00";
} elseif ($day === 6) {
    $schedule = "<br><br> Послезавтра - лучший день, чтобы обратиться в Horns&Hooves! <br> Мы работаем для Вас с 09.00";
} elseif ($day === 7 || $time >= 18) {
    $schedule = "<br><br> Завтра - лучший день, чтобы обратиться в Horns&Hooves! <br> Мы работаем для Вас с 09.00";
}


if ($time >= 6 && $time < 11) {
    $greeting = "Доброе утро! <hr> Сегодня $day.";
    $background = "https://pixabay.com/get/e833b90b28f1033ed1534705fb0938c9bd22ffd41cb4114795f7c97ca1/barley-field-1684052_1920.jpg";
} elseif ($time >= 11 && $time < 18) {
    $greeting = "Добрый день! <hr> Сегодня $day.";
    $background = "https://pixabay.com/get/eb32b80c21f7083ed1534705fb0938c9bd22ffd41cb4114795f7c87bae/the-way-2793939_1920.jpg";
} elseif ($time >= 18 && $time < 23) {
    $greeting = "Добрый вечер! <hr> Сегодня $day.";
    $background = "https://pixabay.com/get/e833b5062ff31c22d2524518a33219c8b66ae3d01cb117419df1c37e/fishing-164977_1280.jpg";
} else {
    $greeting = "Доброй ночи! <hr> Сегодня $day.";
    $background = "https://pixabay.com/get/e83cb6062df0073ed1534705fb0938c9bd22ffd41cb4114795f8c07ca5/castelmezzano-1979546_1920.jpg";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.2</title>
</head>
<body style="background: url(<?= $background ?>) no-repeat; background-size: 100%; text-align: center">
    <h1 style="display: inline-block; margin: 400px auto 0; padding: 20px; background: #bed1ff; opacity: 0.8;
    border-radius:
    15px"><?= $greeting . $schedule ?></h1>
</body>
</html>