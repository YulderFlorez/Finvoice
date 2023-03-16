<?php
$personas = array("Juan" => 8, "Pérez" => 15, "Sebastian" => 5, "Hans" => 9, "Gabriel" => 7, "Rocío" => 5);

$max_edad = max($personas);
$persona_max_edad = array_search($max_edad, $personas);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Persona con mayor edad</title>
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 10px;
		}
	</style>
</head>
<body>
	<h1>Persona con mayor edad:</h1>
	<table>
		<tr>
			<th>Nombre</th>
			<th>Edad</th>
		</tr>
		<tr>
			<td><?php echo $persona_max_edad; ?></td>
			<td><?php echo $max_edad; ?></td>
		</tr>
	</table>
</body>
</html>
