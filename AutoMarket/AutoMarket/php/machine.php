<?php
	


	
	include ("conexao.php");

	
	$query = 'SELECT * FROM Cliente';
	$resultado = mysqli_query($link,$query);
	//$linha = mysqli_fetch_array($resultado);
	$inc = "";
	$campo1="";
	$campo2=""; 
	$campo3="";
	$campo4="";
	$campo5="";
	$campo6="";
	if (!empty($_POST['enviarcadastro'])) {
		$nomecompleto = Addslashes($_POST['nomecompleto']);
		$email = Addslashes($_POST['email']);
		$senha = Addslashes(md5($_POST['senha']));
		$cpf = Addslashes($_POST['cpf']);
		$endereco = Addslashes($_POST['endereco']);
		$numero = Addslashes($_POST['numero']);
		if (empty($nomecompleto))$campo1 = "*";
		if (empty($email))$campo2 = "*";
		if (empty($senha))$campo3 = "*";
		if (empty($cpf))$campo4 = "*";
		if (empty($endereco))$campo5 = "*";
		if (empty($numero))$campo6 = "*";
		$query = "INSERT INTO Cliente(nomeCliente,
					emailCliente,			
                    senhaCliente,
                    cpfCliente,
					enderecoCliente,
					telefoneCliente)
	values ('$nomecompleto','$email','$senha','$cpf','$endereco',$numero);";
		mysqli_query($link,$query);
		/*if ($campo1=="" && $campo2=="" && $campo3=="" && $campo4=="" && $campo5=="" && $campo6=="") {
			$_POST['emaillog'] = $_POST['email'];
			$_POST['senhalog'] = $_POST['senha'];
			$_POST['enviarlogin'] = "Enviar";
		}*/
	}




	if (!empty($_POST['enviarlogin'])) {
		$contemailinvalido=0;
		while ($linha = mysqli_fetch_array($resultado)) { 
			foreach ($linha as $key => $value) {
				if ($key=="emailCliente") {
					if ($_POST['emaillog']==$value) {
					$contemailinvalido++;
						if (Addslashes($_POST['emaillog'])==$linha['emailCliente'] && Addslashes(md5($_POST['senhalog']))==$linha['senhaCliente']) {
							$_SESSION['codlogin'] = $linha['codCliente'];
							$_SESSION['senhases'] = $linha['senhaCliente'];
							$_SESSION['nome'] = $linha['nomeCliente'];
							setcookie("nome",$_SESSION['nome'],time()+1800);
							setcookie("senha",$_SESSION['senhases'],time()+1800);
							setcookie("codlogin",$_SESSION['codlogin'],time()+1800);

							if(!empty($linha['fotoCliente'])){
								$_SESSION['foto'] = $linha['fotoCliente'];
								setcookie("foto",$_SESSION['foto'],time()+30);
							}else{
								$_SESSION['foto'] = "image/perfil/user.jpg";
							}

							echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=php/teladeload.php'>";
						}else{
							$inc = "* Senha incorreta";
						}
					}
				}
			}
		}
		if ($contemailinvalido==0) {
			$inc = "* Email não registrado";
		}
	}


?>