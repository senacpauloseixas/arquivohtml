<?php
	include 'conexao.php';

		if (isset($_POST["nome"]) && isset($_POST["login"]) && isset($_POST["senha"]) && isset($_POST["endereco"]) && isset($_POST["cep"]) && isset($_POST["bairro"])&& isset($_POST["cidade"])&& isset($_POST["estado"])&& isset($_POST["telefone"])&& isset($_POST["imagem"])) {
			$nome = $_POST["nome"];
			$login = $_POST["login"];
			$senha = MD5($_POST ["senha"]);
			$endereco = $_POST["endereco"];
			$cep = $_POST["cep"];
			$bairro = ($_POST ["bairro"]);
			$cidade = ($_POST ["cidade"]);
			$estado = ($_POST ["estado"]);
			$telefone = ($_POST ["telefone"]);
			$imagem = ($_POST["imagem"]);




		$sql = "insert into usuarios(nome, login, senha, userendereco, usercep, userbairro, usercidade, userestado, usertelefone) values ('$nome', '$login', '$senha','$endereco', '$cep','$bairro', '$cidade', '$estado', '$telefone')";
		if (mysqli_query($conn, $sql)) {
			echo"<script language='javascript' type='text/javascript'>alert('Dados adcionados com Sucesso');window.location.href='http://makeparty.esy.es/cadastro.html';</script>";
					if($imagem != NULL) { 
						$nomeFinal = time().'.jpg';
						if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
							$tamanhoImg = filesize($nomeFinal); 

							$mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg)); 

							$imagem = "insert into usuarios (userimg) values ('$mysqlImg')";
							mysqli_query($imagem,$conn) or die("O sistema não foi capaz de executar a query"); 

							unlink($nomeFinal);
							
				
							}
						} 
						else { 
							echo"Você não realizou o upload de forma satisfatória."; 
						} 


		}
		else {
			die("<script language='javascript' type='text/javascript'>alert('Falha na execução');window.location.href='http://makeparty.esy.es/cadastro.html';</script>");
		}
		mysqli_close($conn);}
?>