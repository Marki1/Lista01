<?php
    $nome = $_GET["name"];
    $id = $_GET["id"];
    $genero = $_GET["genero"];
    

    if($id < 18 && $genero=="feminino"){
        echo "Acesso proibido: " .$nome;
    }
    elseif($id > 18){
        echo "Acesso permitido: " .$nome;
    }