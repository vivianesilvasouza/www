<html>
	<!-- salvar como novoTime.html na pasta
		[03] 16.10.2020 PHP 2
		dentro do diretório www do wamp -->
	<head>
		<title>Cadastro de Time</title>
	</head>
	
	<body>
		<h2>Cadastro de Time</h2>
		<form	action="incluirTime.php"
				method="post"
				enctype="multipart/form-data">
			Nome:
			<input 	type="text"
					name="nome"
					required
					maxlength="30"
					placeholder="Informe o nome do time"
					size="30">
			<br>
			Tipo:
			<select name="tipo">
				<option value="FB">Futebol de Botão</option>
				<option value="FC" selected>Futebol de Campo</option>
				<option value="FS">Futebol de Salão</option>
				<option value="FO">Futebol Society</option>
			</select>
			<br>
			Data de Criação:
			<input 	type="date"
					name="dataCriacao"
					min="1857-10-24"
					max="2022-12-31">
					
			<br>
			UF:
			<select name="UF">
				<option value="PR">Paraná</option>
				<option value="RJ">Rio de Janeiro</option>
				<option value="RS">Rio Grande do Sul</option>
				<option value="SP">São Paulo</option>
			</select>
			
			Técnico:
			<input 	type="text"
					name="tecnico"
					maxlength="50"
					required
					size="30">
			<br>
			<br>
			Pontos:
			<input 	type="number"
					name="pontos"
					min="0"
					max="96"
					value="0">
			<br>
			<hr>
			<input type="submit" value="Cadastrar Time">
			<!-- 

			dataCriacao 	date,
			uf          	char(2),
			historico   	text,
			tecnico     	varchar(50),
			pontos      	int(3),
			G4          	boolean,
			emblema
			-->
			
			
			
		</form>
	</body>
</html>