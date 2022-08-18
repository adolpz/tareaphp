<?php
$nombre = "";
$sueldo = 0;
$aumento = 0;
for($i = 0; $i < 20; $i++){
    $descuento = 0;
    $nombre = readline("ingrese su nombre");
    $sueldo = readline("ingrese su sueldo");
    if($sueldo < 800){
      $aumento = $sueldo * 0.15;
    }
    echo "el sueldo es: " .$sueldo . "\n";
    echo "Aumento " .$aumento . "\n"; 
    echo "Total a pagar: "  .($sueldo + $aumento);

}
?> 