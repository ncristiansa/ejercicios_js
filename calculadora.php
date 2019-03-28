<?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $optselect = $_GET["opcion"];
    if($optselect == "Suma")
    {
        echo $num1+$num2;
    }
    if($optselect == "Dividir")
    {
        echo $num1/$num2;
    }
    if($optselect == "Resta")
    {
        echo $num1-$num2;
    }
    if($optselect == "Multiplicar")
    {
        echo $num1*$num2;
    }
    
?>