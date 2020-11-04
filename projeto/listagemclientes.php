<?php

$servidor = "localhost";
$usuario = "root" ;
$senha = "";

$con = mysqli_connect ($servidor, $usuario, $senha);

//2 selecionar bancos de bados 

$banco = "dinocoforcar";

mysqli_select_db($con, "$banco") or 
    die("Erro na seleção de bancos de dados" . mysqli_error($con)) ;

?>