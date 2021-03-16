<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Функциональный способ</title>
    <link rel="stylesheet" href="./index.css">
</head>

<body>

    <div class="main">
        <form method="POST" action="./adminHandler.php">
            <label for="file">
                <input type="checkbox" name="file" id="file">
            </label>

            <?php
$inputControlNumber = mt_rand(0, 1000);

$dir = "./Appliance/";

// Открыть заведомо существующий каталог и начать считывать его содержимое

$workingDir = opendir($dir);
while (($file = readdir($workingDir)) !== false) {
    if (($file != ".") && ($file != "..")) {
        echo '
            <label class = "admin__input" for="file' . $inputControlNumber . '">
            <a href = "./Appliance/' . $file . '">Посмотреть файл</a>
                <input type="checkbox" name="file" id="file' . $inputControlNumber . '">
            </label> ';
    }
}
closedir($workingDir);
?>
        </form>
    </div>
</body>

</html>