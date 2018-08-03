<?php

/**
* 
*/
class perros
{
	public function Rotweiller()
	{
		echo "Soy un perro negro con cafe de guardia y protección<br>";
		echo $this->Bulldog();
	}
	private function Bulldog()
	{
		echo "Soy un perro chato";
	}
	protected function Chihuahua()
	{
		echo "Soy un perro mexicano";
	}
}

/**
* 
*/
class gatos extends perros
{
	public function maine()
	{
		echo "Soy un gato gigante<br>";
		echo $this->Chihuahua();
	}
}

$objeto = new gatos();
$objeto->maine();

































/*
class serVivo
{
	public function respirar()
	{
		echo "Estoy respirando<br>";
		$this->nombre();
	}
	private function nombre()
	{
		echo "Mi nombre es Ricardo<br>";
	}
	protected function metodoProtegido()
	{
		echo "Soy un metodo protegido";
	}
}


class serHumano extends serVivo
{
	public function razonar()
	{
		echo "Estoy razonando<br>";
		echo $this->respirar();
	}
}


class otraClase extends serHumano
{
	function imprimir()
	{
		echo "Soy un intento de doble herencia";
	}
}

//$objeto = new serHumano();
//$objeto->respirar();
//$objeto->razonar();
$objeto = new serHumano();
$objeto->razonar();


*/

/*
TAREAS
1)hacer un objeto que herede algo LISTO
2)Hacer un objeto que herede un metodo privado LISTO
3)Hacer un objeto que herede otra clase ya heredada LISTO
4)Hcaer un objeto que herede un metodo protegido

*/

?>


