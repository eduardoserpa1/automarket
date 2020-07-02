<html>
<head>
	<title>AutoMarket</title>
	<link href="theme.css?version=12" />
	<link rel="stylesheet" type="text/css" href="css/themecontalogada_editar.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<meta charset="utf-8">
	<link rel="icon" href="css/img/icon.png">
</head>
<body>
	<main>
	<?php 
	include ("php/mostraperfil.php"); 
	include("php/chamalogo.php");
	?>
	<div class="maindiv">
		<form action="editadados.php" method="post" enctype="multipart/form-data">
		<h1><i>Dados da Conta</i><input type="submit" name="botaoaplicar" id="botaoaplicar" value="Aplicar" ></h1>
		
		<br>

		
		<table>
			<tr >		
				<th style="border-top: solid 1px #eeeeee;" class="th1">Nome Completo</th>	<th style="border-top: solid 1px #eeeeee;"class="th2"><input type="text" name="editarnomecompleto" placeholder=<?php echo $nomeperfil; ?> ></th>
			</tr>

			<tr >		
				<th class="th1">Email</th>	<th class="th2"><input type="text" name="editaremail" placeholder=<?php echo $emailperfil; ?>></th>
			</tr>

			<tr >		
				<th class="th1">Senha</th>	<th class="th2"><form action="mudasenha.php"><input type="submit" id="botaomudarsenha" name="mudasenha" value="Mudar Senha"></form></th>
			</tr>

			<tr >		
				<th class="th1">CPF</th>	<th class="th2"><input type="text" name="editarcpf" placeholder=<?php echo $cpfperfil; ?>></th>
			</tr>

			<tr >		
				<th class="th1">Endereço</th>	<th class="th2"><input type="text" name="editarendereco" placeholder=<?php echo $enderecoperfil; ?>></th>
			</tr>

			<tr >		
				<th class="th1">Nº de Telefone</th>	<th class="th2"><input type="text" name="editartelefone" placeholder=<?php echo $telefoneperfil; ?>></th>
			</tr>

			<tr >		
				<th class="th1">Foto</th>	<th class="th2"><input type="file" name="foto"></th>
			</tr>


		</table>
	</form>
		<br>
		<br>
		<br>
		<br>
		<form action="php/teladesair.php">
		<input id="botaosairid" type="submit" name="sair" value="Sair da conta">
		</form>
	</div>

<?php
	

	if (!empty($_POST['botaoaplicar'])) {
			$e=0;
			if(!empty($_POST['editarnomecompleto'])){
				$nome = $_POST['editarnomecompleto'];
				$atualizadados = "UPDATE Cliente SET nomeCliente = '$nome' WHERE codCliente = '$codigodelogin'";
				mysqli_query($link,$atualizadados);
				$e=1;
				$nomeperfil = $nome;
				$_SESSION['nome'] = $nome;
			}
			if(!empty($_POST['editaremail'])){
				$email = $_POST['editaremail'];
				$atualizadados = "UPDATE Cliente SET emailCliente = '$email' WHERE codCliente = '$codigodelogin'";
				mysqli_query($link,$atualizadados);
				$e=1;
				$emailperfil = $email;
			}
			if(!empty($_POST['editarcpf'])){
				$cpf = $_POST['editarcpf'];
				$atualizadados = "UPDATE Cliente SET cpfCliente = '$cpf' WHERE codCliente = '$codigodelogin'";
				mysqli_query($link,$atualizadados);
				$e=1;
				$cpfperfil = $cpf;
			}
			if(!empty($_POST['editarendereco'])){
				$endereco = $_POST['editarendereco']; 
				$atualizadados = "UPDATE Cliente SET enderecoCliente = '$endereco' WHERE codCliente = '$codigodelogin'";
				mysqli_query($link,$atualizadados);
				$e=1;
				$enderecoperfil = $endereco;
			}
			if(!empty($_POST['editartelefone'])){
				$tel = $_POST['editartelefone'];
				$atualizadados = "UPDATE Cliente SET telefoneCliente = '$tel' WHERE codCliente = '$codigodelogin'";
				mysqli_query($link,$atualizadados);
				$e=1;
				$telefoneperfil = $tel;
			}
			if(!empty($_FILES['foto']['name'])){
				$destino = 'image/perfil/' .time().'-'. $_FILES['foto']['name'];
 	
				$arquivo_tmp = $_FILES['foto']['tmp_name'];
				move_uploaded_file( $arquivo_tmp, $destino);
				$_SESSION['foto'] = $destino;
				$atualizadados = "UPDATE Cliente SET fotoCliente = '$destino' WHERE codCliente = '$codigodelogin'";
				mysqli_query($link,$atualizadados);
				$e=1;
			}
			if($e==1){
				echo "<meta HTTP-EQUIV='refresh' CONTENT='0.00;URL=php/dadosalterados.php'>";
			}else{
				echo "<meta HTTP-EQUIV='refresh' CONTENT='0.00;URL=contalogada.php'>";
			}
		}
	

?>	

	
</main>
</body>
</html>