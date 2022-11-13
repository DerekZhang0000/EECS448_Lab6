<!DOCTYPE html>
	<html>
		<head>
			<title>Exercise 1</title>
		</head>
		<body>
			<h1>Exercise 1</h1>
			<table>
				<?php
				for ($i = 1; $i <= 100; $i++)
				{
					echo "<tr>";
					for ($j = 1; $j <= 100; $j++)
					{
						echo "<td>" . $i * $j . "</td>";
					}
					echo "</tr>";
				}
				?>
			</table>
		</body>
	</html>
