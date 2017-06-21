<?php
	include 'conexao.php';

	if (isset($_POST['login']) && isset($_POST['senha'])) {
      
		  $login = $_POST['login'];
		  $senha = md5($_POST['senha']);	
            
      $sql= "select * from usuarios WHERE login = '$login' AND senha = '$senha'";
    	$verifica = mysqli_query($conn,$sql) or die ("erro ao selecionar");
      		  if (mysqli_num_rows($verifica)<=0){
        		  echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
        	  die ();
        	  }
    		  else{
            
         	 	setcookie("login",$login);
         		header("Location:paginausuario.php");
       			 }
    }
?>