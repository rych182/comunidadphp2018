<?php


class nombres
{
	public function nombre($value)
	{
		echo $value;
	}

	public function p1()
	{
		echo "<p>";
	}
	public function p2()
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
}
$objeto1 = new nombres();
$objeto2 = new nombres();
$objeto3 = new nombres();
$objeto4 = new nombres();
$objeto5 = new nombres();
$objeto6 = new nombres();


$objeto6->p1();
$objeto1->nombre("Ricardo<br>");
$objeto6->p2();

$objeto6->h1();
$objeto2->nombre("Rafael<br>");
$objeto6->h2();

$objeto6->p1();
$objeto3->nombre("Francisco<br>");
$objeto6->p2();


$objeto6->p1();
$objeto4->nombre("Sutano<br>");
$objeto6->p2();

$objeto5->nombre("Mengano<br>");

























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
//2)objeto modificado desde afuera  LISTO
//3)Cambiando mi apodo cuando está protegido LISTO   
//4)Imprimiendo un objeto con 3 métodos públicos, uno inserta un valor a una PROPIEDAD PRIVADA, uno declara y el otro muestra . LISTO  
//5)Cambiar PROPIEDAD PRIVADA desde afuera y con variable dentro del metodo LISTO
//6)Hacer 5 objetos con una misma clase, y que cada objeto me muestr un nombre distinto  LISTO
//7)Crear un objeto con una clase que dentro tenga metodos con etiquetas html y modifiques un segundo objeto que imprima cualquier cosa. LISTO

















