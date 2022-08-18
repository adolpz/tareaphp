<?php 
//inicio
//TIPOS DE DATOS EN PHP
//Texto = Cadena
//Numerico
//Int
//Float, double
//Char

$nombre = "Adonay "; //Cadena
$num = 20 ; //Entero
$nota = 9.12 ;
$letra = 'R';
$dui = "97239820-9";
$apellido = "Lopez ";
$num1 = "73158010";
$sexo = "Masculino ";


echo "<strong>Nombre:</strong> " . $nombre . $apellido . "<br/>";
echo "<strong> edad:</strong> " . $num . "<br/>";
echo "<strong>DUI:</strong> " . $dui . "<br/>";
echo "<strong>Telefono:</strong> " . $num1 . "<br/>";
echo "<strong>Sexo:</strong> " . $sexo . "<br/>";

$n1 = 6;
$n2 = 9;
$n3 = 10;

$promedio = ($n1 + $n2 + $n3) /3;
echo "<strong>EL NOMBRE DEL ALUMNO ES: </strong>" . $nombre . $apellido . "<br/>";
echo "<strong>EL PROMEDIO ES: </strong>" . $promedio . "<br/>"  ;

$nu1 = 7;
$nu2 = 6;
$nu3 = 5;
$nu4 = 8;

$calcular = ($nu1 + $nu2 + $nu3 + $nu4)*100;
$calcular2 = ($nu1 * $nu2 * $nu3 * $nu4);

echo "<strong> EL perimetro es: </strong>" . $calcular . "<br/>";
echo "<strong> EL area calculada es: </strong>" . $calcular2;

?>