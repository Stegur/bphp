<?php

//$row = 1;
//if (($handle = fopen("data.csv", "r")) !== FALSE) {
//    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
//        $num = count($data);
//        echo "<p> $num полей в строке $row: <br /></p>\n";
//        $row++;
//        for ($c=0; $c < $num; $c++) {
//            echo $data[$c] . "<br />\n";
//        }
//    }
//    fclose($handle);
//}
//


$file = fopen('data.csv', 'r');
$firstLine = fgetcsv($file, 1000, ';');
$name = $firstLine[0];
$art = $firstLine[1];
$price = $firstLine[2];

$json = [];

while ($str = fgetcsv($file, 1000, ';')) {
    $json[] = [
        $name => $str[0],
        $art => $str[1],
        $price => $str[2],
    ];
}
fclose($file);

file_put_contents('data.json', json_encode($json));
