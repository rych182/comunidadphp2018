<?php

class miSistema
{
	function __construct()
	{
		echo "Post: ".$_POST["nombreformulario"]."<br>";
		echo "Get: ".$_GET["nombreformulario"]."<br>";

		echo "Inicia archivo recibir";
	}
}
$miObjeto = new miSistema();



//El truquito para mandar datos en la url con el metodo POST
//echo "Get: ".$_GET["edad"]."<br>";

?>