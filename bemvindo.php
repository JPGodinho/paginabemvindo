<?php
    $name = $_GET["txtNome"];
    $sex = $_GET["sexo"];
    
if($sex == "masculino"){
        echo("Olá {$name} seja bem vindo!");
    } 
else if($sex == "feminino"){
        echo("Olá {$name} seja bem vinda!");
    } else{
        echo("Olá {$name} seja bem vindo ou bem vinda");
    }
?>