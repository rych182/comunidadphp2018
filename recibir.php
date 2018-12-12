<?php

class miSistema
{
	function __construct()
	{
		echo "Post: ".$_POST["nombreformulario"]."<br>";
		echo "Get: ".$_GET["edad"]."<br>";

		echo "Inicia archivo recibir";
	}
}
$miObjeto = new miSistema();
?>