<?php
	session_start();
	$link = mysqli_connect('localhost', 'root', '', 'automarketbd1');
		if (mysqli_connect_error()) {
			echo "erro de conexão com o banco de dados - " . mysqli_connect_error();
		}

?>