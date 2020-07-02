<html>
<head>
	<title>AutoMarket</title>
	<link href="theme.css?version=12" />
	<link rel="stylesheet" type="text/css" href="css/themecarrinho.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<meta charset="utf-8">
	<link rel="icon" href="css/img/icon.png">
</head>
<body>
	<?php 
	include ("php/mostraperfil.php"); 
	include("php/chamalogo.php");
	?>
	<?php
	
	$soma=0;
	$log = $_SESSION['codlogin'];
	$query = "SELECT * FROM Carrinho WHERE codCliente = $log";
	$resultado = mysqli_query($link,$query);
	echo "<div class='maindiv'>";
	echo "<table>";
	echo "<h1>Carrinho de Compras</h1>";
		while ($linha = mysqli_fetch_array($resultado)) {
			$cod = $linha['codProduto'];
			$resultado2 = mysqli_query($link,"SELECT * FROM Produto WHERE codProduto = $cod");
			echo "<tr>";
				while ($linha2 = mysqli_fetch_array($resultado2)) {
					echo "<td class='th1'><img class='fotoprod' src=".$linha2['memoriaProduto']."></td>";
					echo "<td class='th2'>".$linha2['nomeProduto']."</td>";
					echo "<td class='th3'> <button onclick='remove(".$cod.")'>X</button> </td>";
					echo "<td class='th3'>".$linha2['precoProduto']."</td>";
					$soma += $linha2['precoProduto'];
				}

			echo "</tr>";
		}

	echo "</table>";
	echo "<input type='submit' value='Finalizar Compra' onclick='att()'>";
	echo "<h2 id='total'>Valor total: R$ ".$soma."<h2>";
	echo "</div>";
	?>
	<script type="text/javascript">
		function att() {
			alert("Compra finalizada com sucesso!");
		}
		function remove(cod) {
        		var xmlhttp = new XMLHttpRequest();
        		xmlhttp.onreadystatechange = function() {
        			if (this.readyState == 4 && this.status == 200) {
        				window.location.reload();
        			
            	}
        		};
        xmlhttp.open("GET", "php/ajax_carrinho2.php?codigo_produto2=" + cod , true);
        xmlhttp.send();
    }

	</script>



<main>	
	
</main>
</body>
</html>