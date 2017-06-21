<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>inserir professores</title>
	
</head>
<body>
	<body>
	<button type="button"><a href="indexo2.html">Home</a></button>
<section>
	<form method="post">
		<p>Nome do Estabelecimento:</p><input type="text" name="nome" size="50" maxlength="80"><br>
		<p>Email:</p><input type="text" name="email"  maxlength="50"><br>
		<p>endereço:</p><input type="text" name="endereco"  maxlength="50"><br>
		<p>cep:</p><input type="text" name="cep"  maxlength="10"><br>
		<p>bairro:</p><input type="text" name="bairro"  maxlength="30"><br>
		<p>cidade:</p><input type="text" name="cidade"  maxlength="30"><br>
		<label for="estado">Estado:  <br><br></label>
			<select name="estado" id="select">
				<option value="">Selecione o Estado</option>
				<option value="ac">Acre</option>
				<option value="al">Alagoas</option>
				<option value="ap">Amapá</option>
				<option value="am">Amazonas</option>
				<option value="ba">Bahia</option>
				<option value="ce">Ceará</option>
				<option value="df">Distrito Federal</option>
				<option value="es">Espírito Santo</option>
				<option value="go">Goiás</option>
				<option value="ma">Maranhão</option>
				<option value="ms">Mato Grosso do Sul</option>
				<option value="mt">Mato Grosso</option>
				<option value="mg">Minas Gerais</option>
				<option value="pa">Pará</option>
				<option value="pb">Paraíba</option>
				<option value="pr">Paraná</option>
				<option value="pe">Pernambuco</option>
				<option value="pi">Piauí</option>
				<option value="rj">Rio de Janeiro</option>
				<option value="rn">Rio Grande do Norte</option>
				<option value="rs">Rio Grande do Sul</option>
				<option value="ro">Rondônia</option>
				<option value="rr">Roraima</option>
				<option value="sc">Santa Catarina</option>
				<option value="sp">São Paulo</option>
				<option value="se">Sergipe</option>
				<option value="to">Tocantins</option>
			</select>
			<p>telefones:</p><input type="text" name="telefone"  maxlength="50"><br>
		
		<input type="submit" name="sub" class="btn btn-primary" value="Enviar!">
	</form>
</section>
<?php
include 'conexao2.php';
//validar a digitação nos campos is set -está setado (tem informação)
if (isset($_POST["telefone"]) && isset($_POST["estado"]) && isset($_POST["cidade"]) && isset($_POST["bairro"]) && isset($_POST["cep"])
	 && isset($_POST["endereco"])  && isset($_POST["email"]) && isset($_POST["nome"])) {
	$nome 			= $_POST["nome"];
	$endereco		= $_POST["endereco"];
	$email          =$_POST["email"];
	$cep 			= $_POST["cep"];
	$bairro			= $_POST["bairro"];
	$cidade			= $_POST["cidade"];
	$estado 		= $_POST["estado"];
	$telefone		= $_POST["telefone"];
	
	
	

// criando a conexão com o banco de dados 
//$conn = new mysqli($servername, $username, $password, $dbname); connection
//new mysqli- cria uma nova instancia de classe mysqli- cria uma nova instancia para poder utilizar todos os atributos e métodos desta classe.


//armazenar os dados que estão nas variaveis de memória na tabela cliente do banco de dados empresa 
$sql = "insert into empresas (NomeEmpresa, EmailEmpresa, EnderecoEmpresa, CepEmpresa, BairroEmpresa, CidadeEmpresa, EstadoEmpresa, TelefoneEmpresa) values ('$nome','$email','$endereco','$cep','$bairro','$cidade','$estado','$telefone')";
if (mysqli_query($conn, $sql)) {
	echo 'Dados adcionados com sucesso';
}
else {
	die("falha na execução da consulta");
}
mysqli_close($conn);}

?>

</body>
</html>



</body>
</html>
</body>
</html>