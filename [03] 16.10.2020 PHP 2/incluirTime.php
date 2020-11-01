<?php
	// salvar como incluirTime.php
	echo "<h2>Gravando o time...</h2>";
	
	/* 1 - Receber os dados vindos do formulário
	
	P) Onde estão os dados vindos do formulário?
	
	R) Podem vir na matriz $_GET[""] ou $_POST[""]
	
	P) Como sei exatamente qual matriz eles estão vindo?
	R) Olhe a propriedade "method" do formulário
	
	P) Como acesso no PHP estes dados da matriz?
	R) Informando a matriz e a posição (dentro dela)
	deve ser o nome do objeto/elemento criado no
	formulário, entre aspas. Exemplos:
		$_GET["marcador"]
		$_GET["ano"]
		
		$_POST["idade"]
		$_POST["tamanho"]
	*/
	
	// Receber os dados do formulário em variáveis
	$nome			= $_POST["nome"];
	$tipo			= $_POST["tipo"];
	$dataCriacao	= $_POST["dataCriacao"];
	$UF				= $_POST["UF"];
	$tecnico		= $_POST["tecnico"];
	$pontos			= $_POST["pontos"];
	
	// objeto do tipo checkbox precisa de tratamento
	// porque se ele não estiver ticado no formulário
	// ele não chega na página PHP
	// e a tentativa de acessar um objeto que não veio
	// gerará um erro
	
	// Tratamento:
	// 1. Cria uma variável com um valor padrão
	//  	diferente daquilo que o objeto carrega
	$G4 = 0; // Valor padrão
	
	// 2. Verificar se o objeto veio
	if(isset($_POST["G4"]))
	{
		// Atualizo a variável p/o valor que veio
		$G4= $_POST["G4"];
	}
	
	$historico		= $_POST["historico"];
	
	// Arquivo chega na matriz $_FILES[]
	$arquivoEmblema	= 	$_FILES["emblema"]["name"];
	$tamanhoArquivo	=	$_FILES["emblema"]["size"];
	$tipoArquivo	=	$_FILES["emblema"]["type"];
	$nomeTmpArquivo	=	$_FILES["emblema"]["tmp_name"];
	$erroEnvioArquivo=	$_FILES["emblema"]["error"];
	
	/*
	echo "O time " . $_POST["nome"] . " é de " .
			$_POST["UF"] . " e tem " .
			$_POST["pontos"] . " pontos";
	*/ 
	
	// 2 - Validação de dados
	
	// 3 - Exibir os dados que chegaram
	echo "Nome: <b>$nome</b> <br>";
	echo "Tipo: <b>$tipo</b> <br>";
	echo "Data da criação: <b>$dataCriacao</b> <br>";
	echo "UF: <b>$UF</b> <br>";
	echo "Técnico: <b>$tecnico</b> <br>";
	echo "Pontuação: <b>$pontos</b><br>";
	echo "G4: <b>$G4</b> <br>";
	echo "Histórico: <br><b>";
	echo $historico;
	echo "</b><hr>";

	// Foi enviado um arquivo? Então mostro dados e transfiro
	if($arquivoEmblema<>"")
	{
		echo "<hr>";
		echo "Nome do arquivo: <b>$arquivoEmblema</b> <br>";
		echo "Tamanho: $tamanhoArquivo bytes<br>";
		echo "Tipo: $tipoArquivo <br>";
		echo "Nome temporário (servidor): $nomeTmpArquivo<br>";
		echo "Erro no envio: $erroEnvioArquivo <br>";
	
		// Transferir o arquivo para a pasta emblemas
		if (move_uploaded_file($nomeTmpArquivo,"emblemas/$arquivoEmblema"))
		{
			echo "Transferido $nomeTmpArquivo para a pasta emblemas.<br>";
		}			
		else
		{
			echo "Erro na transferência do arquivo.<br>";
		}
		
	}
?>