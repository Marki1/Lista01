<?php
//$_GET["name"];
    $numero = $_GET["numero"];

    if($numero % 2==0){
        echo "Divisivel por 2";
    }
    elseif($numero % 5==0){
        echo "Divisivel por 5";
    }
    elseif($numero % 10==0){
        echo "Divisivel por 10";
    }
    else{
        echo "Não é divisivel";
    }