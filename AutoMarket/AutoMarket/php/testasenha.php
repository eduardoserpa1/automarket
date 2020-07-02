<?php
	
	$inc = "";
	if (!empty($_POST['testasenha'])) {
		if (md5($_POST['testasenhainput'])==$_SESSION['senhases']) {
			echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=mudasenha2.php'>";
		}else{
			$inc = "* Senha incorreta";
		}
	}

	if (!empty($_POST['mudasenha'])) {
		$senhatroca = md5($_POST['mudasenhainput']);
		$codtroca = $_SESSION['codlogin'];
		$query = "UPDATE Cliente
					SET senhaCliente = '$senhatroca'
					WHERE codCliente = '$codtroca'";
					mysqli_query($link,$query);
		$_SESSION['senhases'] = $senhatroca;
		echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=php/dadosalterados.php'>";
	}


?>