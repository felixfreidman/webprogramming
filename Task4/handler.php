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
<?php
date_default_timezone_set('UTC');

$fileControlNumber = mt_rand(0, 1000);
$fileName = './Appliance/registrationFormData' . $fileControlNumber . 'txt';
$file = fopen($fileName, 'a+');
$registrationName = $_POST['nameField'];
$registrationSurname = $_POST['surnameField'];
$registrationEmail = $_POST['emailField'];
$registrationTelephone = $_POST['telField'];
$registrationTopic = $_POST['topicField'];
$registrationPayment = $_POST['paymentField'];
$registrationMailing = $_POST['mailingField'];

fwrite($file, $registrationName . "\n");
fwrite($file, $registrationSurname . "\n");
fwrite($file, $registrationEmail . "\n");
fwrite($file, $registrationTelephone . "\n");
fwrite($file, $registrationTopic . "\n");
fwrite($file, $registrationPayment . "\n");
fwrite($file, $registrationMailing . "\n");
fwrite($file, date(DATE_RFC822));
fclose($file);
echo '<h1 clsss = "header_succes">Успешно</h1>';
header('https://felixfreidman.hostfl.ru
');
?>
</body>
</html>
