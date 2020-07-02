<?php

	
	include ("conexao.php");
	$nomeperfil = "";
	$emailperfil = "";
	$senhaperfil = "";
	$cpfperfil = "";
	$enderecoperfil = "";
	$telefoneperfil = "";

if ($_SESSION['codlogin']!=""){
	$codigodelogin = $_SESSION['codlogin'];
	
	$query = 'SELECT * FROM Cliente';
	$resultado = mysqli_query($link,$query);

		while ($linha = mysqli_fetch_array($resultado)) { 
			foreach ($linha as $key => $value) {
				if ($key=="codCliente") {
					if ($codigodelogin==$value) {
							$nomeperfil = $linha['nomeCliente'] ;
							$emailperfil = $linha['emailCliente'] ;
							$senhaperfil = $linha['senhaCliente'] ;
							$cpfperfil = $linha['cpfCliente'] ;
							$enderecoperfil = $linha['enderecoCliente'] ;
							$telefoneperfil = $linha['telefoneCliente'] ;
					}
				}
			}
		}
	}

?>