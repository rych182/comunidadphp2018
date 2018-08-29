<?php

class ClaseEquis 
{
	public $nombre = "";
	public function modificar($var)
	{
		$this->nombre=$var;
	}
	public function mostrar()
	{
		echo "Mi nombre es " . $this->nombre . "<br>";
	}

}
class html
{
	public function parrafo()
	{
		echo "<p>";
	}
	public function parrafo1()
	{
		echo "</p>";
	}
	public function acheUno()
	{
		echo "<h1>";
	}
	public function acheUno1()
	{
		echo "</h1>";
	}
}



$objeto1 = new ClaseEquis();
$objeto2 = new ClaseEquis();
$objeto3 = new ClaseEquis();
$objeto4 = new ClaseEquis();
$objeto5 = new ClaseEquis();
$objeto6 = new html();


$objeto1->modificar("Sutano");
$objeto6->parrafo();
$objeto1->mostrar();
$objeto6->parrafo1();


$objeto2->modificar("Mengano");
$objeto6->acheUno();
$objeto2->mostrar();
$objeto6->acheUno1();

$objeto3->modificar("Perenganos");
$objeto3->mostrar();


$objeto4->modificar("Britany");
$objeto6->acheUno();
$objeto4->mostrar();
$objeto6->acheUno1();


$objeto5->modificar("Roberto");
$objeto6->parrafo();
$objeto5->mostrar();
$objeto6->parrafo1();































/*
class html
{
	public function head($variable)
	{
		echo "<html><head>";
		echo "<title>$variable</title>";
		echo "</head>";
	}

	public function AbrirBody()
	{
		echo "<body>";
	}

	public function CerrarBody()
	{
		echo "</body>";
	}

	public function pie()
	{
		echo "</html>";
	}
}


class MiClase 
{
	private $nombre = "";
	public function cambiar($variable)
	{
		$this->nombre = $variable;
	}
	public function modificar()
	{
		echo "Mi nombre es: " . $this->nombre;
	}
}

$objeto0 = new html();
$objeto0->head("Titulo vergas");
$objeto0->AbrirBody();

$objeto = new MiClase();
$objeto->cambiar("Veronica Xareli Dominguez, y estoy bien tetona<br>");
$objeto->modificar();

$objeto2 = new MiClase();
$objeto2->cambiar("Helena, tengo unas nalgotas blancas lechosas bien ricas<br>");
$objeto2->modificar();

$objeto3 = new MiClase();
$objeto3->cambiar("Tania, y son una gordisabrosa<br>");
$objeto3->modificar();

$objeto4 = new MiClase();
$objeto4->cambiar("Fernanda, una teen que se le debió un cogidon<br>");
$objeto4->modificar();

$objeto5 = new MiClase();
$objeto5->cambiar("América, una milf sabrosa<br>");
$objeto5->modificar();

$objeto0->CerrarBody();
$objeto0->pie();

*/















/*class MiClase
{
	private $nombre = "";
	public function __construct()
	{
		//echo "Mi nombre es ";
	}
	public function cambiar()
	{
		$this->nombre = "El choco";
	}
	public function mostrar()
	{
		echo "Me dicen " . $this->nombre;
	}
}

$miObjeto = new MiClase();
$miObjeto->cambiar();
$miObjeto->mostrar();
*/

//**********COSAS POR PRACTICAS******************
//1)oBJETO conb constructor LISTO
//2)objeto modificado desde afuera LISTO
//3)Cambiando mi apodo cuando está protegido LISTO  
//4)Imprimiendo un objeto con 3 métodos públicos, uno inserta un valor a una PROPIEDAD PRIVADA, uno declara y el otro muestra .  LISTO
//5)Cambiar PROPIEDAD PRIVADA desde afuera y con variable dentro del metodo LISTO
//6)Hacer 5 objetos con una misma clase, y que cada objeto me muestr un nombre distinto  LISTO
//7)Crear un objeto con una clase que dentro tenga metodos con etiquetas html y modifiques un segundo objeto que imprima cualquier cosa. 

















