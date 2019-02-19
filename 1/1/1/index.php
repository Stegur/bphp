<?php

$variable = 1;
//$variable = 'one';
//$variable = true;
//$variable = 3.14;
//$variable = null;

if (is_bool($variable)) {
    echo "$variable is bool <hr>";
    echo "Логический тип. Переменные логического типа могут принимать два значения: true или false";
} elseif (is_float($variable)) {
    echo "$variable is float <hr>";
    echo "Число с плавающей точкой. Используется для вещественных чисел.";
} elseif (is_int($variable)) {
    echo "$variable is int <hr>";
    echo "Целое 32-битное число со знаком. Возможные значения в диапазоне от -2 147 483 648 до 2 147 483 647.";
} elseif (is_string($variable)) {
    echo "$variable is string <hr>";
    echo "Для работы с текстом можно применять строки.";
} elseif (is_null($variable)) {
    echo "$variable is null <hr>";
    echo "NULL указывает, что значение переменной не определено.";
} else {
    echo 'other';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
</head>
<body>
    <p><?= $type ?></p>
</body>
</html>