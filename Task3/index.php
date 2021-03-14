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
    <div class = "main">
    <form action="./index.php" method="get" class = "main__form">
        <select name="lang" id="lang" class = "form__input-number">
            <option value="ru">RU-Russian</option>
            <option value="en">EN-English</option>
            <option value="de">DE-German</option>
        </select>
        <select name="phrase" id="phrase" class = "form__input-number">
            <option value="hello">Привет</option>
            <option value="open">Открыть</option>
            <option value="save">Сохранить</option>
            <option value="close">Закрыть окно?</option>
        </select>
        <button type = "submit" class = "main__submit-form">Submit</button>
    </form>

<?php
error_reporting(0);

$dictionary = [
    'en' => [
        'hello' => 'Hello!',
        'open' => 'Open',
        'save' => 'Save',
        'close' => 'Close Window?',
    ],
    'ru' => [
        'hello' => 'Привет!',
        'open' => 'Открыть',
        'save' => 'Сохранить',
        'close' => 'Закрыть окно?',
    ],
    'de' => [
        'hello' => 'Hallo!',
        'open' => 'Öffnen',
        'save' => 'Speichern',
        'close' => 'Schließen das Fenster?',
    ],
];
$language = $_GET['lang'];
$phrase = $_GET['phrase'];
echo '<h1 class = "form__result">' . $dictionary[$language][$phrase] . '</h1>';
?>
</div>
</body>
</html>
