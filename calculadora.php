<?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $optselect = $_GET["opcion"];
    if($optselect == "Sumar")
    {
        echo $num1+$num2;
    }else if($optselect == "Dividir")
    {
        echo $num1/$num2;
    }else if($optselect == "Restar")
    {
        echo $num1-$num2;
    }else if($optselect == "Multiplicar")
    {
        echo $num1*$num2;
    }
    
?>