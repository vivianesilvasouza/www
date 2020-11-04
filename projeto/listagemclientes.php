<?php

$servidor = "localhost";
$usuario = "root" ;
$senha = "";

$con = mysqli_connect ($servidor, $usuario, $senha);

//2 selecionar bancos de bados 

$banco = "dinocoforcar";

mysqli_select_db($con, "$banco") or 
    die("Erro na seleção de bancos de dados" . mysqli_error($con)) ;

//3 colocar comando de seleção de dados 

$comandoSQL = " select * from clientes;";

// imprimir a variavel na tela 
// copiar o que aparece no conmsole do MYSQL
// Para ver se está funcionando corretamente

//echo $comandoSQL; mostra se deu certo 

$registros = mysqli_query($con, $comandoSQL) or 
    die("Erro na seleção de clientes: <br>" . 
        mysqli_error($con) );



?>