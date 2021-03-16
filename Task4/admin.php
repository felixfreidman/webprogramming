<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Панель Админа</title>
    <link rel="stylesheet" href="./index.css">
</head>

<body>

    <div class="main">
        <form method="post" action="./adminHandler.php" class="main__form">
            <?php

$dir = "./Appliance/";

// Открыть заведомо существующий каталог и начать считывать его содержимое

$workingDir = opendir($dir);
$checkboxCounter = 0;
$checkboxArray = [];
$counter = 1;
while (($file = readdir($workingDir)) !== false) {
    $inputControlNumber = mt_rand(0, 999);
    if (($file != ".") && ($file != "..")) {
        echo '
            <label class="admin__input" for="file' . $inputControlNumber . '">
            <a class="admin__link" " href = "./Appliance/' . $file . '">Посмотреть файл</a>
                <input type="checkbox" id="file" name="file' . $inputControlNumber . '">
            </label>
            <input type="hidden" value = ' . $inputControlNumber . ' name="checkbox' . $counter . '">';
    }
}

closedir($workingDir);
?>
            <button type="submit" class="main__submit-form">Удалить</button>
        </form>
    </div>


</body>

</html>