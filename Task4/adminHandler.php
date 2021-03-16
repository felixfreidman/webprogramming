

<?php
header('Location: ./admin.php
');

$dir = "./Appliance/";

$workingDir = opendir($dir);
$checkboxCounter = 0;
$filesArray = scandir($dir);
$length = sizeof(scandir($dir)) - 2;

for ($counter = 0; $counter < $length; $counter++) {
    $file = readdir($workingDir);
    $counter++;
    $checkboxName = $_POST['checkbox' . $counter . ''];
    $counter--;
    $checkbox = $_POST['file' . $checkboxName];
    if ($checkbox == 'on') {
        unlink($dir . $filesArray[$counter + 2] . '');
    }
}

?>
