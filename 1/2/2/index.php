<?php

$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$middleName = $_POST['middleName'];
$code = $_POST['code'];

$validCode = 'nd82jaake';

// Проверка отсутствия спецсимволов, в логине

$pattern = '/{@}{\/}{*}{?}{,}{;}{:}/';
$isLoginCorrect = preg_match($pattern, $login);

if (!$isLoginCorrect) {
    echo "Логин содержит недопустимые символы - @ / * ? , ; : <br>";
}

// Проверка длины пароля

if (strlen($password) < 8) {
    echo "Длина пароля должна быть минимум 8 символов <br>";
}

// Проверка коректности кода

if ($validCode !== strtolower($code)) {
    echo "Кодовое слово неверно <br>";
}
