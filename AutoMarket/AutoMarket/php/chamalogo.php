
<?php
if(empty($_SESSION['codlogin'])) {
echo"<a class='titulo' href='home.php'><img id='logo' width='260' height='53' src='css/img/logo1.png'></a>
	<div class='divnav'>
		
		<b><a class='navlinks' id='l1' href='minhaconta.php'>Produtos</a>
		<a class='navlinks' id='l2' href='#'>Ofertas</a>
		<a class='navlinks' id='l3' href='minhaconta.php'>Carrinho de Compras</a>
		<a class='navlinks' id='l4' href='minhaconta.php'>Minha Conta</a></b>
		<a href='minhaconta.php'><i id='desc'>Desconectado</i><img id='foto' src='./image/perfil/user.jpg'></a>

	</div>";
}else{
	echo"<a class='titulo' href='home.php'><img id='logo' width='260' height='53' src='css/img/logo1.png'></a>
	<div class='divnav'>
		
		<b><a class='navlinks' id='l1' href='produtos.php'>Produtos</a>
		<a class='navlinks' id='l2' href='#'>Ofertas</a>
		<a class='navlinks' id='l3' href='carrinho.php'>Carrinho de Compras</a>
		<a class='navlinks' id='l4' href='contalogada.php'>Minha Conta</a></b>
		<a href='contalogada.php'><i id='desc'>".$_SESSION['nome']."</i><img id='foto' src='./".$_SESSION['foto']."'></a>
	</div>";
}
?>

