<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name= viewport content="width=device-width initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/estilo.css" >
  <link rel="stylesheet" type="text/css" href="css/estilo2.css" >
  <style type="text/css">
    #cabeca2 p {font-size: 1em !important;}
    #cabeca2 img {background-color: red;
       width: 10%; height: 150px;
        border-radius: 240px;
         margin-left: 45%;
         margin-right:  45%;}
    #info {width: 100%;
     text-align: center !important;
     margin-top: 60px;
     margin-bottom:250px;}
    @media screen and (max-width: 850px)
    {
    #cabeca2 img {width: 40%;
        margin-left: 30%;
          margin-right:  30%;}

    }
  </style>
  <title>Make Party - Sua Pagina</title>
</head>
<body id="usuario">
<nav>   
      <div  class="topnav navbar-default" role="navigation"  id="myTopnav">
        
                  <a  href="paginausuario.php"> Minha área</a>
                  <a  href="pesquisa.php">  Pesquise seus produtos</a>
                  <a id="esq"  href="login.html">  Sair</a>
                  <a id="botao" href="javascript:void(0)" style="font-size:15px;" class="icon" onclick="myFunction()">
                      <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-left">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                  </a>
                    
            
             
          
          
        </div>
        <script>
                    
            function myFunction() {

            var x = document.getElementById("myTopnav");


          if (x.className === "topnav navbar-default") {
           x.className += " responsive ";

          } else {
               x.className = "topnav navbar-default";
                  }
              }
        </script>
      </div>
    </nav>
  <header id="user">
    <a id="top" ></a>
  
    <section id="cabeca2" class="jumbotron" >
       
          <img src="multimidia/imagemperfil.jpg" id="imagemperfil" >
         
       <h3>

         <?php
         include "conexao.php";
            $login_cookie = $_COOKIE['login'];
          ?>  

       </h3>
       <h4>Bem Vindo(a)!!</h4>
       <?php 
          include "conexao.php";
          $sql = "select * from usuarios where login='$login_cookie'";

          $listar = mysqli_query($conn, $sql);

          while ($campo = mysqli_fetch_array($listar)) {
         ?>

            
              <h4><?php echo $campo['nome'];?></h4>
              <p><?php echo'Endereço:  ';echo $campo['userendereco'];echo " - "; echo $campo['userbairro'];echo " - ";echo $campo['usercidade'];echo " - ";echo $campo['userestado'];?></p>
              <p><?php echo'CEP:';echo $campo['usercep'];?></p>
              <p>Telefone:  <?php echo $campo['usertelefone'];?></p>
              
         <?php } 

          mysqli_close($conn)

          ?>
       <br>
       
    </section>
  </header>
  <section style="width: 100%; text-align: center; margin-top: 50px; margin-bottom:150px;">
    <h3>Estas são algumas sugestões para você.</h3>
    <div>
      <?php
      include "conexao.php";
      $sql = "select * from empresas where NomeEmpresa ='A lareira'";

          $listar = mysqli_query($conn, $sql);

          while ($campo = mysqli_fetch_array($listar)) {
         ?>

            
              <p>Nome:  <?php echo $campo['NomeEmpresa'];?></p>
              <p>
                <?php echo'Endereço:';echo $campo['EnderecoEmpresa'];
                       echo " - "; echo $campo['BairroEmpresa'];
                       echo " - ";echo $campo['CidadeEmpresa'];
                       echo " - ";echo $campo['EstadoEmpresa'];
                 ?>
              </p>
              <p>CEP: <?php echo $campo['CepEmpresa'];?></p>
              <p>Telefone:  <?php echo $campo['TelefoneEmpresa'];?></p>
              <p>Email para contato:  <?php echo $campo['EmailEmpresa'];
              ?></p>
              <br>
               <p><button class="btn btn-primary" style="background-color: #20DDDD; margin-top: 30px;"><a style="color: white;" href="paginaempresa.php">Mais Informações</a></button></p>
               <br>
              <hr>
              <br>
              
              <?php } 

          mysqli_close($conn)

          ?>
      
    </div>
  </section>
  <footer>
    <div id="botoesRedes">
        <figure>
          <a href="https://www.facebook.com/MakeParty-301311193621946/">
            <img src="multimidia/ms-facebook.gif">
          </a>
          <a href="#">
            <img src="multimidia/ms-twitter.gif">
          </a>
        </figure>
      </div>
      <a href="#top" id="top">
        <img src="multimidia/seta2.jpg" style="width: 30px; height: 30px;">
      </a>
      
      
      
    </footer>
  </main>
  <script href="js\estilo.js"></script>
  <script href="js\bootstrap.js"></script>
  <script href="jquery.js"></script>
</body>
</html>