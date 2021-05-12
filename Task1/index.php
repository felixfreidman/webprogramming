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
      <h1><a href = "./Task2/index.html">Перейти на функциональный способ</a></h1>
      <h1><a href = "./Task3/index.php">Перейти на страницу переводчика</a></h1>
      <h1><a href = "./Task4/index.php">Перейти на страницу с формой регистрацией</a></h1>
      <h1><a href = "./Task4/admin.php">Перейти на страницу c админской панелью</a></h1>
      <h1><a href = "./Task5/index.php">Перейти на страницу c новой формой регистрации</a></h1>
      <h1><a href = "./Task6/admin_panel.php">Перейти на страницу c новой формой регистрации</a></h1>
      <table class = "main__table">
		<?php
//Table Header Creator
$rowCounter = 1;
$columnCounter = 1;
$miltiplier = 1;
echo '<tr>';
echo '<td class = "table__cell_table-start"></td>';

while ($rowCounter < 11) {
    echo '<td class = "table__cell_row-header">' . $rowCounter . '</td>';
    $rowCounter++;
}
echo '</tr>';
//Table Content Creator

for ($rowCounter = 1; $rowCounter < 11; $rowCounter++) {
    echo '<tr>';
    echo '<td class = "table__cell_row-counter">' . $rowCounter . '</td>';
    for ($columnCounter = 1; $columnCounter < 11; $columnCounter++) {
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
