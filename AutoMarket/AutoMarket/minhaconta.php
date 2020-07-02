<html>
<head>
	<title>AutoMarket</title>
	<link href="theme.css?version=12" />
	<link rel="stylesheet" type="text/css" href="css/theme.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<meta charset="utf-8">
	<link rel="icon" href="css/img/icon.png">
</head>
<body>
	<?php 
	include("php/machine.php");
	include("php/chamalogo.php"); 
	?>
<main>	
	<div class="divcadastro">
		<form method="post" action="minhaconta.php" name="cadastro">
			<label id="cadastralogo" >Registrar-se</label><br><br>
			<label>Nome Completo: </label><?php if($campo1=="*")echo "<p id='erroinc'>*</p>"; ?><br>
				<input type="text" name="nomecompleto" placeholder="Digite seu nome completo..."><br>
			<label>Email: </label><?php if($campo2=="*")echo "<p id='erroinc'>*</p>"; ?><br>
				<input type="email" name="email" placeholder="Digite seu email..."><br>
			<label>Senha: </label><?php if($campo3=="*")echo "<p id='erroinc'>*</p>"; ?><br>
				<input type="password" name="senha" placeholder="Digite sua senha..."><br>
			<label>CPF: </label><?php if($campo4=="*")echo "<p id='erroinc'>*</p>"; ?><br>
				<input type="tel" name="cpf" placeholder="Digite seu CPF..."><br>
			<label>Endereço: </label><?php if($campo5=="*")echo "<p id='erroinc'>*</p>"; ?><br>
				<input type="text" name="endereco" placeholder="Ex. Rua xxxx 000."><br>
			<label>Telefone: </label><?php if($campo6=="*")echo "<p id='erroinc'>*</p>"; ?><br>
				<input type="tel" name="numero" placeholder="Ex. (00) 0 0000 0000"><br>

				<input type="submit" class="submits" name="enviarcadastro">
				
		</form>
	</div>
<br>
<br>
<br>
	<div class="divlogin">
		<form method="post" action="minhaconta.php" name="login">
			<label id="entralogo" >Entrar</label><br><br>
			<label>Email:</label><br>
				<input type="email" name="emaillog" placeholder="Digite seu email..."><br>
			<label>Senha:</label><br>
				<input type="password" name="senhalog" placeholder="Digite sua senha..."><br>
				<?php 
					if ($inc=="* Email não registrado") {
						echo "<p id='erroinc'>* Email não registrado </p>";
					}elseif ($inc=="* Senha incorreta") {
						echo "<p id='erroinc'>* Senha incorreta </p>";
					}
				 ?>
				<input type="submit" class="submits" name="enviarlogin">
		</form>
	</div>
	
	

</main>
</body>
</html>