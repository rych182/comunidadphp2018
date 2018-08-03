<?php

class nombres
{
	public function mostrar($variable)
	{
		echo "Mi nombre es: " . $variable;
	}
}

class html
{
	public function parrafo1()
	{
		echo "<p>";
	}
	public function parrafo2()
	{
		echo "</p>";
	}
	public function h1()
	{
		echo "<h1>";
	}
	public function h2()
	{
		echo "</h1>";
	}
	public function negritasItalica1()
	{
		echo "<strong><i>";
	}
	public function negritasItalica2()
	{
		echo "</strong></i>";
	}

}

$objeto = new nombres();
$objeto2 = new nombres();
$objeto3 = new nombres();
$objeto4 = new nombres();
$objeto5 = new nombres();
$objeto6 = new html();

$objeto6->parrafo1();
$objeto->mostrar("Ricardo, y me gusta PHP<br>");
$objeto6->parrafo2();

$objeto6->h1();
$objeto2->mostrar("Ricardo, y quiero dominar PHP con POO<br>");
$objeto6->h2();

$objeto6->negritasItalica1();
$objeto3->mostrar("Ricardo, quiero aprender Laravel y Angular para tener un buen trabajo<br>");
$objeto6->negritasItalica2();

$objeto6->parrafo1();
$objeto4->mostrar("Ricardo, y quiero dominar muchos frameworks y CMS's de PHP<br> ");
$objeto6->parrafo2();

$objeto5->mostrar("Ricardo, y quiero ser un buen FullStack<br>");







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
//oBJETO conb constructor LISTO
//objeto modificado desde afuera LISTO
//Cambiando mi apodo cuando está protegido  LISTO
//Imprimiendo un objeto con 3 métodos públicos, uno inserta un valor a una PROPIEDAD PRIVADA, uno declara y el otro muestra LISTO.  
//Cambiar PROPIEDAD PRIVADA desde afuera y con variable dentro del metodo  LISTO
//Hacer 5 objetos con una misma clase, y que cada objeto me muestr un nombre distinto LISTO 
//Crear un objeto con una clase que dentro tenga metodos con etiquetas html y modifiques un segundo objeto que imprima cualquier cosa . 

















