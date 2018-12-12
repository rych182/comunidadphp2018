<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario para enviar datos a PHP</title>
</head>
<body>
	<div>
		Esto es una página para formulario de html con PHP
	</div>
	<form action="recibir.php?edad=23" method="POST">
		Nombre: <input type="text" name="nombreformulario" id="idnombreformulario">
		<br>
		<input type="submit" value="Enviar">
	</form>
	<!--
	name es el nombre generico al componente que trabajas y puede repetirse en cualquier otro elemento.

	id: el identificador ÚNICO que nos sirve para el DOM
-->
</body>
</html>