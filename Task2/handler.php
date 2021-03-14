<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./index.css" />
  </head>
  <body>
    <div class = "main">
      <table class = "main__table">
		<?php
//Table Header Creator
$rowCounter = 1;
$columnCounter = 1;
$miltiplier = 1;
$rowAmount = $_GET['rows'];
$columnAmount = $_GET['columns'];
echo '<tr>';
echo '<td class = "table__cell_table-start"></td>';

while ($rowCounter < $columnAmount + 1) {
    echo '<td class = "table__cell_row-header">' . $rowCounter . '</td>';
    $rowCounter++;
}
echo '</tr>';
//Table Content Creator

for ($rowCounter = 1; $rowCounter < $rowAmount + 1; $rowCounter++) {
    echo '<tr>';
    echo '<td class = "table__cell_row-counter">' . $rowCounter . '</td>';
    for ($columnCounter = 1; $columnCounter < $columnAmount + 1; $columnCounter++) {
        if ($columnCounter === $miltiplier) {
            echo '<td class = "table__cell-diagonale">' . $miltiplier * $columnCounter . '</td>';
        } else {
            echo '<td class = "table__cell">' . $miltiplier * $columnCounter . '</td>';
        }
    }
    $miltiplier++;
    echo '</tr>';
}
?>
	</table>
    </div>
  </body>
</html>
