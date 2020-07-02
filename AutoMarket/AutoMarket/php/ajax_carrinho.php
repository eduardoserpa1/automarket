<?php
include 'conexao.php';
	$codigo_produto = intval($_REQUEST["codigo_produto"]);
	$log = $_SESSION['codlogin'];
	$query = "INSERT INTO Carrinho(codCliente,codProduto) VALUES ($log,$codigo_produto);";
	mysqli_query($link,$query);

	$query = "SELECT nomeProduto FROM Produto WHERE codProduto = $codigo_produto";
	$resultado = mysqli_query($link,$query);
	$linha = mysqli_fetch_array($resultado);
	echo $linha['nomeProduto'];	
?>