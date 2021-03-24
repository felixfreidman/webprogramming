

<?php

$dir = "./Appliance/";

$workingDir = opendir($dir);
$checkboxCounter = 0;
$filesArray;
while (($file = readdir($workingDir)) !== false) {
    $filesArray[] = $file;
}
$checkboxNameArray = [];
$checkboxArray = [];
$length = sizeof($filesArray) - 2;

// Loop for aquiring all available checkboxes
for ($counter = 0; $counter < $length; $counter++) {
    $checkboxNameArray[] = $_POST['checkbox' . $counter . ''];
    $checkboxArray[] = $_POST['file' . $checkboxNameArray[$counter]];
}
$counter = $length - 1;
while (($counter >= 0) && ($checkboxArray[$counter] == 'on')) {
    $linkToFile = $dir . ' ' . $filesArray[$counter];
    unlink($linkToFile);
    $counter--;
}

?>
