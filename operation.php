<?php

$num1 = $_POST['num1'];

$cuenta_total = $num1;
$pago_cliente= $_POST['pago_cliente'];


echo "La cuenta total es : " . $cuenta_total;
echo "</br>";
echo "El cliente ha pagado : " . $pago_cliente;

echo "</br>";

if($cuenta_total < $pago_cliente){
   $propina =  $pago_cliente - $cuenta_total;
   echo "Total Propina dejada : " . $propina ."€";;
}else {
  
        $propina = $cuenta_total - $pago_cliente;
        echo "A deber : ". $propina ."€";
    
}


