<?php
header("Content-Type:text/html; charset=latin1");
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
//4
$registros = mysqli_query($con, $comandoSQL) or 
    die("Erro na seleção de clientes: <br>" . 
        mysqli_error($con) );

//5 verificar o número de registros existentes
$linhas = mysqli_num_rows($registros);

// se não ter registros (linhas=0) , interromper o programa

    if($linhas <1)
    {
        die("Cadastro de times está vazio! - Programa Interropido");
    }
    echo "Encontrado $linhas clientes <hr>";

// 6 repetir o numero de linhas que tem 
// mostrar os dados de cada linha 
    $contador=0;
         while ($contador <$linhas)
         {

            // Criando a matriz $dados
            $dados = mysqli_fetch_array($registros);

            echo "id: " . $dados["id"] . "<br>";
            echo "nome: " . $dados["nome"]  . "<br>";
            echo "dataNascimento: " . $dados["dataNascimento"]  . "<br>";
            echo "cpf: " . $dados["cpf"]  . "<br>";
            echo "rg: " . $dados["rg"]  . "<br>";
            echo "sexo: " . $dados["sexo"]  . "<br>";
            echo "email: " . $dados["email"]  . "<br>";
            echo "telefone: " . $dados["telefone"]  . "<br>";
            echo "celular: " . $dados["celular"]  . "<br>";
            echo "pais: " . $dados["pais"]  . "<br>";
            echo "estado: " . $dados["estado"]  . "<br>";
            echo "cidade: " . $dados["cidade"]  . "<br>";
            echo "bairro: " . $dados["bairro"]  . "<br>";
            echo "cep: " . $dados["cep"]  . "<br>";
            echo "rua: " . $dados["rua"]  . "<br>";
            echo "numero: " . $dados["numero"]  . "<br>";
            echo "complemento: " . $dados["complemento"]  . "<br>";
            echo "referencia: " . $dados["referencia"]  . "<hr>";








             $contador++;
             
             //echo"$contador <br>";
         }







?>