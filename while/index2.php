<?php
$ven1 = 0;
$ven2 = 0;
$ven3 = 0;
$opcion = " si";
$i = 0;
$total = 0;
while($opcion == " si"){
$venta1 = readline("Ingrese compra 1: ");
$venta2 = readline("Ingrese compra 2: ");
$venta3 = readline("Ingrese compra 3: ");
$opcion = readline("Desea seguir comprando: ");
$ven1 = $ven1 + $venta1;
$ven2 = $ven2 + $venta2;
$ven3 = $ven3 + $venta3;
$i++;
}
$total = $ven1 + $ven2 + $ven3; 
echo "El total de compras es: " . "\n";
echo number_format($total,2) . "\n"; 
?> 