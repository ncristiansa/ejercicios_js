<?php

$numerorand = rand(1,10);
$arrayRecibida = $_REQUEST["listaAlumnos"];
$arrayDifrente = [];

if($arrayRecibida[$numerorand] != $arrayRecibida[$numerorand])
{
    print_r("Si son iguales".$arrayRecibida[$numerorand]);
    
}else{
    array_push($arrayDifrente, $arrayRecibida[$numerorand]);
    print_r($arrayDifrente);
}
?>