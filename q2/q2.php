<?php
    $num1 = $_GET["numero"];
    $num2 = $_GET["numero"];

    $res = $num1 + $num2;

    if($res > 20){
        echo $res + 8;
    }
    elseif($res <= 20){
       echo $res - 5;
    }