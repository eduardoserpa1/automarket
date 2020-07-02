<!DOCTYPE html>
<html>
<head>
	<title>AutoMarket</title>
	<link href="theme.css?version=12" />
	<link rel="stylesheet" type="text/css" href="css/themeprodutos.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<meta charset="utf-8">
	<link rel="icon" href="css/img/icon.png">
	<?php
	
	?>
</head>
<body>
	<?php
		include 'php/conexao.php';
		include 'php/chamalogo.php';
	
	?>

	<aside>
		<form method="post" name="formcategoria" action="produtos.php">
		<input class="nav" type="submit" name="carne" value="Carnes">
		<input class="nav" type="submit" name="vegetal" value="Vegetais">
		<input class="nav" type="submit" name="fruta" value="Frutas">
		<input class="nav" type="submit" name="padaria" value="Padaria">
		<input class="nav" type="submit" name="frio" value="Frios">
		<input class="nav" type="submit" name="produtosdelimpeza" value="Produtos de Limpeza">
		</form>
		
		<h1 id="msg"></h1>

		<script type="text/javascript">
		
	function Manda_Carrinho(cod) {
        		var xmlhttp = new XMLHttpRequest();
        		xmlhttp.onreadystatechange = function() {
        			if (this.readyState == 4 && this.status == 200) {

        			document.getElementById('msg').innerHTML = "1x "+ this.responseText + " foi adicionado(a) ao carrinho!";
        			setTimeout(function() {
        				document.getElementById('msg').innerHTML = "";
        			}, 3000);


            	}
        		};
        xmlhttp.open("GET", "php/ajax_carrinho.php?codigo_produto=" + cod , true);
        xmlhttp.send();
    }

		</script>
	</aside>	



<?php
		$w = 280;
		$h = 0;
		$categoria = "";
		$i =0;
	
		if (!empty($_POST['carne']))$categoria = "carne";
		if (!empty($_POST['vegetal']))$categoria = "vegetal";
		if (!empty($_POST['fruta']))$categoria = "fruta";
		if (!empty($_POST['padaria']))$categoria = "padaria";
		if (!empty($_POST['frio']))$categoria = "frio";
		if (!empty($_POST['produtosdelimpeza']))$categoria = "produtosdelimpeza";
		if ($categoria=="") {
			echo "<h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Selecione a categoria desejada...</h1>";
		}else{
		
		$query = "SELECT * FROM Produto WHERE categoriaProduto = '$categoria'";
		$resultado = mysqli_query($link,$query);
		//echo "<form name='formcompra' action='produtos.php' method='post'>";
		while($linha = mysqli_fetch_array($resultado)) {
		$i++;

echo "<div class=\"extra\" style=\"margin-left: ".$w."px; margin-top: ".$h."px; \">
		<div class=\"intra\">
			<img class=\"d1\" src=".$linha['memoriaProduto'].">
				<div class=\"d2\">
				<h2>".$linha['nomeProduto']."</h2>
				<h3>$ ".$linha['precoProduto']."</h3>
				</div>
			<input type='submit' value='Adicionar ao Carrinho' name='adiciona_carrinho' onclick='Manda_Carrinho(".$linha['codProduto'].")'>
		</div>
	</div>";
		$w += 250;
		if ($i!=0) {
		if ($i%4 == 0) {
			$w=280;
			$h+=280;
		}
		}
		}
		//echo "</form>";
	}
	

?>



</body>
</html>
