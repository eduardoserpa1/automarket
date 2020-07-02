<html>
<head>
	<title>AutoMarket</title>
	<link href="theme.css?version=12" />
	<link rel="stylesheet" type="text/css" href="css/thememudasenha.css">

<main>	
	
</main>
</body>
</html>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<meta charset="utf-8">
	<link rel="icon" href="css/img/icon.png">
</head>
<body>
	<?php
	include("php/conexao.php"); 
	include("php/chamalogo.php");
	include("php/testasenha.php");
	?>

	<div id="divlogin">
		<form method="post" action="mudasenha2.php" name="testasenha">
			<label id="entralogo" ><i>Senha Nova</i></label><br><br>
	
				<input type="password" name="mudasenhainput" placeholder="Digite sua nova senha..."><br>
				<input type="submit" class="submits" name="mudasenha">
		</form>
	</div>


</body>
</html>
