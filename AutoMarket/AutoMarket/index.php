<!DOCTYPE html>
<html>
<head>
	<title>Redirecionando</title>
	<meta HTTP-EQUIV='refresh' CONTENT='0;URL=home.php'>
</head>
<body>

	<?php  

		include 'php/conexao.php';
		$_SESSION['codlogin'] = "";

		if (isset($_COOKIE['nome'])) {
			$_SESSION['nome']=$_COOKIE['nome'];
		}
		if (isset($_COOKIE['senha'])) {
			$_SESSION['senhases']=$_COOKIE['senha'];
		}
		if (isset($_COOKIE['codlogin'])) {
			$_SESSION['codlogin']=$_COOKIE['codlogin'];
		}
		if (isset($_COOKIE['foto'])) {
			$_SESSION['foto']=$_COOKIE['foto'];
		}
	?>

</body>
</html>