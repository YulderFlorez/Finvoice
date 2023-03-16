<?php
function cantidad_caracteres($texto) {
  return strlen($texto);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contador de caracteres</title>
	<style>
		body {
			font-family: Arial, sans-serif;
		}
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
		}
		input[type=text] {
			padding: 10px;
			margin-bottom: 10px;
			border: 1px solid gray;
			border-radius: 5px;
		}
		button {
			background-color: #4CAF50;
			color: white;
			padding: 10px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<h1>Contador de caracteres</h1>
	<form method="post">
		<label for="texto">Introduce un texto:</label>
		<input type="text" name="texto" id="texto">
		<button type="submit">Contar caracteres</button>
	</form>

	<?php
	if(isset($_POST['texto'])) {
		$texto = $_POST['texto'];
		$num_caracteres = cantidad_caracteres($texto);
		echo "<p>El texto introducido tiene $num_caracteres caracteres.</p>";
	}
	?>
</body>
</html>