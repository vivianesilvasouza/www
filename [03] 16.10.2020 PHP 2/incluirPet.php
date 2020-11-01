<html>
	<head>
		<title>Gravação de dados do Pet</title>
		<style>
			body {background-color:lightblue;}
		</style>
	</head>
	<body>
	<?php
	// salvar como incluirPet.php
	// na pasta www (Wamp Server)
	// na pasta de projeto da semana passada
	// [02] 02.10.2020 FORM1
	
	// 1 - Receber os dados vindos do formulário em variáveis
	$nome		=	$_GET["nome"];
	$sexo		=	$_GET["sexo"];
	$tipo		=	$_GET["tipo"];
	$nomeDono	=	$_GET["nomeDono"];
	$idade		=	$_GET["idade"];
	
	// 2 - Validação básica
	if ($nome=="")
	{
		die("Nome do Pet deve ser informado!");
	}
	
	if($nomeDono=="")
	{
		die("O nome do dono do Pet deve ser informado!");
	}
	
	if($tipo=="")
	{
		die("O tipo do PET deve ser informado!");
	}
	
	// 3 - Exibindo os dados vindos do formulário
	echo "<h2>Gravação de dados do Pet</h2>";
	echo "Nome do Pet: <b>$nome</b> <br>";
	echo "Sexo: <b>$sexo</b> <br>";
	echo "Tipo: <b>$tipo</b> <br>";
	echo "Nome do dono: <b>$nomeDono</b> <br>";
	echo "Idade: <b>$idade</b> <br>";
	
	// 4 - Abrindo o banco de dados
	// .1 - Conectar a página PHP com o servidor MySQL
	// Função mysqli_connect
	// Parâmetros:
	// - servidor a ser conectado : "localhost"
	// - usuário no servidor : "root"
	// - senha: "" (vazia)
	
	$con = mysqli_connect("localhost","root","");
	// $con é um objeto de conexão com o MYSQL
	
	// .2 Abrir o banco de dados sgp
	// Função mysqli_select_db
	// Parâmetros:
	// - Link da conexão a ser aberta: $con (objeto de conexão)
	// - Nome do banco a ser aberto: "sgp"
	
	mysqli_select_db($con, "sgp") or 
		die("Erro na abertura do banco:" . mysqli_error($con) );
	
	?>
	</body>
</html>