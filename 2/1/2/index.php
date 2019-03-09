<form enctype="multipart/form-data" action="index.php" method="POST">
    <p>Загрузить картинку</p>
    <input name="userfile" type="file"/>
    <input type="submit" value="Загрузить"/>
</form>

<?php


if ($_FILES['userfile']['error'] === 0 && $_FILES['userfile']['type'] === 'image/jpeg') {
    $file = $_FILES['userfile']['tmp_name'];
    $name = $_FILES['userfile']['name'];

    move_uploaded_file($file, __DIR__ . '\\' . $name);
}


$files = scandir(__DIR__);

foreach ($files as $file) {
    if ($file === '.' || $file === '..') {
        continue;
    }

    if (substr($file, -4) === '.jpg'){
    	echo "<img src=\"$file\" alt=\"some pic\" style=\"display: block; width: 500px\"><br>";
	}
}
