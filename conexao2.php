<?php

$conn = mysqli_connect('localhost','root','root','site');
//verificando se deu erro de conexão
//die - imprime a mensagem que geralmente vem acompanhada por uma mensagem de erro - por falha na conexão
mysqli_query($conn, "SET NAMES 'utf8'");
mysqli_query($conn, 'SET caracter_set_connection=utf8');
mysqli_query($conn, 'SET caracter_set_client=utf8');
mysqli_query($conn, 'SET caracter_set_results=utf8');

if (!$conn) {
	die('conexão falhou'.$conn->connect_error);
	}
?>