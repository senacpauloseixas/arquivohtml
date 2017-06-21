<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name= viewport content="width=device-width initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/estilo.css" >
  <style type="text/css">
      #cabeca2 p {font-size: 1em !important;}
      #cabeca2 img {
       width: 10%; height: 150px;
        border-radius: 240px;
         margin-left: 45%;
         margin-right:  45%;}
      #produtos {width: 100%;  margin-top: 150px; margin-bottom:150px;}
      #produtos img {width: 20%; height: 250px;border-radius: 30px;}
 @media screen and (max-width: 850px)
    {
    #cabeca2 img {width: 40%;
                  
                  margin-left: 30%;
                  margin-right:  30%;}
     #produtos img {width: 70%;
                    height: 200px;}     

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
       
          <img src="multimidia/logos/merci.png" id="imagemperfil" >
         
       
       <?php 
          include "conexao.php";
          $sql = "select * from empresas where NomeEmpresa='Merci pães'";

          $listar = mysqli_query($conn, $sql);

          while ($campo = mysqli_fetch_array($listar)) {
         ?>

            
              <h4><?php echo $campo['NomeEmpresa'];?></h4>
              <p><?php echo'Endereço:  ';echo $campo['EnderecoEmpresa'];echo " - "; echo $campo['BairroEmpresa'];echo " - ";echo $campo['CidadeEmpresa'];echo " - ";echo $campo['EstadoEmpresa'];?></p>
              <p><?php echo'CEP:';echo $campo['CepEmpresa'];?></p>
              <p>Telefone:  <?php echo $campo['TelefoneEmpresa'];?></p>
              <p>Email:  <?php echo $campo['EmailEmpresa'];?></p>
              
         <?php } 

          mysqli_close($conn)

          ?>
       <br>
       
    </section>
  </header>
<section id="produtos">
    <h2>Produtos</h2>
    <br>
    <div>
      <?php
      include "conexao.php";
      $sql = "select * from produtos where NomeProduto like '%Merci%'";

          $listar = mysqli_query($conn, $sql);

          while ($campo = mysqli_fetch_array($listar)) {
         
              if ($campo['NomeProduto'] == 'Merci Brigadeiros') { 
                 echo "<img src='multimidia/produtos/doces/brigadeiros.jpg'>";
                 ?>
                <h4><br><strong><?php echo $campo['NomeProduto'];?></strong></h4>
                <p><?php echo'Preço:';echo $campo['valorProduto'];?></p>
                <p>Informações do Produto: <br><?php echo $campo['informacoesProduto'];?></p>
                <p>Tamanhos:  <br><?php echo $campo['tamanhoProduto'];?></p>
                <p><button class="btn btn-primary" style="background-color: #20DDDD; margin-top: 30px;"><a style="color: white" href="paginabrigadeiromerci.php">Comprar</a></button></p>
                <hr>
                <?php
               }
              elseif ($campo['NomeProduto'] == 'Merci Torta Salgada') {
                echo "<img src='multimidia/produtos/tortas/Torta Salgada 2.jpg'>";
                ?>
                <h4><br><strong><?php echo $campo['NomeProduto'];?></strong></h4>
                <p><?php echo'Preço:';echo $campo['valorProduto'];?></p>
                <p>Informações do Produto: <br><?php echo $campo['informacoesProduto'];?></p>
                <p>Tamanhos:  <br><?php echo $campo['tamanhoProduto'];?></p>
                <p><button class="btn btn-primary" style="background-color: #20DDDD; margin-top: 30px;"><a style="color: white" href="paginatortamerci.php">Comprar</a></button></p>
                <hr>
                <?php
              }
              else {
                echo "<img src='multimidia/produtos/pizzas/marguerita.jpg'>";
                ?>
                <h4><br><strong><?php echo $campo['NomeProduto'];?></strong></h4>
                <p><?php echo'Preço:';echo $campo['valorProduto'];?></p>
                <p>Informações do Produto: <br><?php echo $campo['informacoesProduto'];?></p>
                <p>Tamanhos:  <br><?php echo $campo['tamanhoProduto'];?></p>
                <p><button class="btn btn-primary" style="background-color: #20DDDD; margin-top: 30px;"><a style="color: white" href="##">Comprar</a></button></p>
                <hr>
                <?php
                }
              ?>
              
              
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
