<?php
	// salvar como listarTimes.php
	// na pasta que acabamos de criar com o nome de 
	// [04] 30.10.2020 LISTAGEM TIMES
	// dentro do WWW (Wamp)


	// 1 - Conectar no MySQL
	// Usamos a função mysqli_connect()
	// - Servidor a ser conectado
	// - usuário MySQL
	// - senha deste usuário
	$servidor = "localhost";
	$usuario  = "root" ; // usuário principal MYSQL
	$senha	  = "";
	
	$con = mysqli_connect($servidor, $usuario, $senha) ;

	// 2 - Selecionar/Abrir o Banco de Dados
	// Usamos a função mysqli_select_db()
	// - Objeto de conexão : $con
	// - O banco de dados a ser aberto: "campeonato_2020"
	$banco = "campeonato_2020";
	
	mysqli_select_db($con, $banco) or 
		die("Erro na seleção do banco campeonato_2020 :<br>" . 
			mysqli_error($con) );
	
	// 3 - Colocar o comando de seleção de dados 
	// na variável $comandoSQL (poderia usar outro nome)
	$comandoSQL = "SELECT * FROM times";
	
	// Vamos imprimir a variável na tela 
	// e copiar o que aparece no Console do MYSQL
	// para ver se está funcionando
	// echo $comandoSQL;
	
	// Se o comando funcionou no console, então comentamos
	// ele para o usuário não se confundir.
	
	// se não funcionou é porque o comando está errado,
	// então a gente arruma o comando e testa de novo
	
	
	// 4 - Enviar o comando SQL (variável) para o MySQL
	// P/ se enviar um comando SQL do PHP p/ MYSQL 
	// usamos a função mysqli_query()
	// - O objeto de conexão: $con
	// - Comando SQL a ser executado: $comandoSQL

	// Quando enviamos um comando de SELEÇÃO DE DADOS, a função
	// mysqli_query() devolve um record set (Conjunto de dados), que é
	// um objeto especial contendo as linhas e colunas resultantes
	// do comando de seleção SQL.
	
	// Chamaremos este objeto record set como $registros	
	
	$registros = mysqli_query($con, $comandoSQL) or 
		die("Erro na seleção de times: <br>" . 
			mysqli_error($con) );

	// Se chegou aqui é porque criou o objeto $registros

	// 5 - Verificar o número de registros existentes
	// Função mysqli_num_rows conta o número de linhas/ registros de dentro
	// de um objeto Record Set.
	$linhas = mysqli_num_rows($registros);
	
	// Se não tiver registros (linhas = 0), interromper o programa
	if($linhas==0)
	{
		die("Cadastro de times está vazio - Programa interrompido!");
	}
	echo "Encontrados $linhas times <hr>";
?>