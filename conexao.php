<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dBase = "aula07";

    $conexao = mysqli_connect($host, $user, $password, $dBase);

    if(!$conexao ){
       echo "Banco de Dados não conectado!";
       die();
    }
   
