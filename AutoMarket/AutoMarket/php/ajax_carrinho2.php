<?php
include 'conexao.php';
	
	$codigo_produto2 = intval($_REQUEST["codigo_produto2"]);
	$log = $_SESSION['codlogin'];
	$query = "DELETE FROM Carrinho WHERE codProduto = $codigo_produto2;";
	mysqli_query($link,$query);
	echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=carrinho.php'>";
?>
	