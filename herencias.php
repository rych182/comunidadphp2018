<?php 

class perros
{

	private function inutiles()
	{
		echo "Chihuahua, Pomeranian, French Puddle";
	}
	public function guardia()
	{
		echo "Rotweiller, Doverman, Pastor Aleman, Pitbull, Bull Terry" . "<br>";
		echo $this->inutiles();
	}
	protected function grandes()
	{
		echo "San Bernardo, Gigante de los pirineos";
	}
	public function perrosFalsos()
	{
		echo "Soy un coyote";
	}
}

class gatos extends perros
{
	public function conozco()
	{
		echo "Siameses y Tabi";
	}
	public function exportadora()
	{
		echo $this->grandes();
	}
}

class pajaros extends gatos
{
	public function pajaritos()
	{
		parent::perrosFalsos();
	}
	
}

class selva
{
	public static function africa()
	{
		echo "Gorila lomo plateado";
	}
}

class operaciones
{
	public function suma($numeros)
	{
		$resultado = $numeros[0] + $numeros[1];
		return $resultado;
	}

	public function resta($numeros)
	{
		$resultado = $numeros[0] - $numeros[1];
		return $resultado;
	}

	public function multiplicacion($numeros)
	{
		$resultado = $numeros[0] * $numeros[1];
		return $resultado;
	}
	public function division($numeros)
	{
		$resultado = $numeros[0] / $numeros[1];
		return $resultado;
	}
}

class mostrar extends operaciones
{
	public function resultadoSuma($numeros)
	{
		echo parent::suma($numeros) . "<br>";
		echo $this->resultadoResta($numeros) . "<br>";
		echo $this->resultadoMultiplicacion($numeros) . "<br>";
		echo $this->resultadoDivision($numeros) . "<br>";
	}
	public function resultadoResta($numeros)
	{
		echo parent::resta($numeros);
	}
	public function resultadoMultiplicacion($numeros)
	{
		echo parent::multiplicacion($numeros);
	}
	public function resultadoDivision($numeros)
	{
		echo parent::division($numeros);
	}
}

$numeros = array(10,2,3,9);
$objeto = new mostrar();
echo $objeto->resultadoSuma($numeros);


//selva::africa();
//$objeto = new pajaros();
//$objeto->pajaritos();


























/*EJERCICIO CON STATIC

class otraClase
{
	public static function metodo()
	{
		echo "Esta madre no tiene objeto";
	}
}

otraClase::metodo();
*/




/* EJERCICIO CON parent::

class perros
{
	
	private function pequenos()
	{
		echo "Soy un Chihuahua";
	}

	public function gigantes()
	{
		echo $this->pequenos();
	}
	public function medianos()
	{
		echo "Soy un Galgo";
	}
}

class gatos extends perros
{
	
	function flacos()
	{
		parent::medianos();
	}
}

$objeto = new gatos();
$objeto->flacos();
*/













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
2)Hacer un objeto que herede un metodo privado  LISTO
3)Hacer un objeto que herede otra clase ya heredada LISTO
4)Hcaer un objeto que herede un metodo protegido LISTO
5)Hacer un objeto que utilice parent::  LISTO
6)Utilizar una clase usando STATIC LISTO
7)hacer una clase que sume, reste, multiplique y divida LISTO
8)Sumar, restar, multiplicar y dividir, los valores de un array fuera de una clase, con un metodo LISTO
9
9)Hacer un arreglo asociativo

*/

?>


