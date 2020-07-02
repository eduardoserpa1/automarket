<html>
<head>
	<title>AutoMarket</title>
	<link href="theme.css?version=12" />
	<link rel="stylesheet" type="text/css" href="css/themeindex.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<meta charset="utf-8">
	<link rel="icon" href="css/img/icon.png">
</head>
<body>
	<?php  
    include("php/conexao.php");
    include("php/chamalogo.php");
    include("php/mostraperfil.php");

	?>
	<div id="divsauda">
	
        <?php
        date_default_timezone_set('America/Sao_Paulo');
            if ($_SESSION['codlogin']!="") {
                $homesauda = date('G');
            
                if ($homesauda>=6 && $homesauda<12)
                {
                        echo "<h1>Bom dia " . $nomeperfil . "! </h1>";
                }
                if ($homesauda>=12 && $homesauda<18)
                {
                        echo "<h1>Boa tarde " . $nomeperfil . "! </h1>";
                }
                if ($homesauda>=18 && $homesauda<24)
                {
                        echo "<h1>Boa noite " . $nomeperfil . "! </h1>";
                }   
                if ($homesauda>=0 && $homesauda<6)
                {
                        echo "<h1>Boa noite " . $nomeperfil . "! </h1>";
                }
                echo "
            <p>
            Ainda não experimentou comprar com a praticidade do <i>AutoMarket</i>? Basta adicionar ao seu carrinho de compras os itens desejados e autorizar o envio.
        </p>
        <p>
            Simples, rápido e eficiente!
        </p>
            <p>Inicie sua compra acessando a página de <b>Produtos</b> ou clique <a id='linkreg' href='produtos.php'>aqui.</a></p>";
            }else{
                $homesauda = date('G:i:s');
        
                if ($homesauda>=6 && $homesauda<12)
                {
                        echo "<h1>Bom dia! </h1>";
                        
                }
                if ($homesauda>=12 && $homesauda<18)
                {
                        echo "<h1>Boa tarde! </h1>";
                }
                if ($homesauda>=18 && $homesauda<24)
                {
                        echo "<h1>Boa noite! </h1>";
                }   
                if ($homesauda>=0 && $homesauda<6)
                {
                        echo "<h1>Boa noite! </h1>";
                }
         echo "<p>Este site de vendas tem como objetivo a otimização e praticidade de compras, sendo realizadas completamente online
            e entregues no endereço desejado.
            </p>
            <p>
            Basta registrar-se, adicionar ao seu carrinho de compras os itens desejados e autorizar o envio.
        </p>
        <p>
           Simples, rápido e eficiente!
        </p>
            <p>Ainda não faz parte do sistema AutoMarket? Registre-se <a id='linkreg' href='minhaconta.php'>aqui.</a></p>"; 
            }
            
        ?>
        		
    		
  			</div>
  		

	
<main>





</main>
</body>
</html>