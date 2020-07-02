<html>
<head>
	<title>AutoMarket</title>
	<link href="theme.css?version=12" />
	<link rel="stylesheet" type="text/css" href="css/themecontalogada.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<meta charset="utf-8">
	<link rel="icon" href="css/img/icon.png">
</head>
<body>
	<?php 
	include ("php/mostraperfil.php"); 
	include("php/chamalogo.php");
	?>
	<div class="maindiv">
		<form action="editadados.php">
		<h1><i>Dados da Conta</i><input type="submit" name="botaoeditar" id="botaoeditar" value="Editar dados" ></h1>
		</form>
		<br>

		
		<table>
			<tr >		
				<th style="border-top: solid 1px #eeeeee;" class="th1">Nome Completo</th>	<th style="border-top: solid 1px #eeeeee;"class="th2"><?php echo $nomeperfil; ?></th>
			</tr>

			<tr >		
				<th class="th1">Email</th>	<th class="th2"><?php echo $emailperfil; ?></th>
			</tr>

			<tr >		
				<th class="th1">Senha</th>	<th class="th2"><form action="mudasenha.php"><input type="submit" id="botaomudarsenha" name="mudasenha" value="Mudar Senha"></form></th>
			</tr>

			<tr >		
				<th class="th1">CPF</th>	<th class="th2"><?php echo $cpfperfil; ?></th>
			</tr>

			<tr >		
				<th class="th1">Endereço</th>	<th class="th2"><?php echo $enderecoperfil; ?></th>
			</tr>

			<tr >		
				<th class="th1">Nº de Telefone</th>	<th class="th2"><?php echo $telefoneperfil; ?></th>
			</tr>


			<tr >		
				<th class="th1">Foto</th>	<th class="th2"><? echo "nenhuma"; ?></th>
			</tr>


		</table>
		<br>
		<br>
		<br>
		<br>
		<form action="php/teladesair.php">
		<input id="botaosairid" type="submit" name="sair" value="Sair da conta">
		</form>
	</div>



<main>	
	
</main>
</body>
</html>