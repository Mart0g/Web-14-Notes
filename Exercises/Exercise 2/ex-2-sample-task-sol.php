<!doctype html>
<html lang="en">
  <head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Exercise 2 - Task</title>
  </head>
  <body>
		<h1>Multiplication Table in PHP</h1>
		<?php
			// rough sample solution, can be done in a simpler / different way

			$rows = 9;
			$cols = 9;
			$styles = 'padding: 10px 15px; text-align: center; background-color: #d3d3d3;';

			echo "<table border =\"1\" style='border-collapse: collapse;'>";
			echo "<tr style='font-weight: bold;'>";
				echo "<th style='$styles'>1</th>";
				for ($col = 2; $col <= $cols; $col++) {
				echo "<th style='$styles'>$col</th>";
				}
			echo "</tr>";
			for ($row = 2; $row <= $rows; $row++) {
				echo "<tr>";
				echo "<th style='$styles'>$row</th>";
				for ($col = 2; $col <= $cols; $col++) {
					$prod = $col * $row;
					echo "<td style='padding: 10px 15px; text-align: center;'>$prod</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		?>
  </body>
</html>