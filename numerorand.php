<?php

$numerorand = rand(1,10);
$arrayRecibida = $_REQUEST["listaAlumnos"];
for($i=1;$i<count($arrayRecibida);$i++)
{
    if($i == $numerorand){
        
    }else{
        echo $arrayRecibida[$numerorand];
    }
}


?>