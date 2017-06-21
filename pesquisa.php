<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name= viewport content="width=device-width initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/estilo.css" >
  <link rel="stylesheet" type="text/css" href="css/estilo2.css" >
  <style type="text/css">
    input{  width: 30%; height: 40px; border-radius: 20px; border-style: solid; text-align: center;}
    #produtos {width: 20%; height: 200px; border-radius: 30px; margin-top: 50px;}
 @media screen and (max-width: 850px) 
 {
  
  #caixapesq {width: 70%;}
  #produtos {width: 70%;}
 }  
  </style>
  <title>Make Party - Sua Pagina</title>
</head>
<body id="usuario">
<nav>   
      <div  class="topnav navbar-default" role="navigation"  id="myTopnav">
        
                  
                  <a  href="pesquisa.php">  Pesquise seus produtos</a>
                  <a  href="paginausuario.php"> Minha área</a>
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
  
    <section id="cabeca" class="jumbotron" >
      <h3></h3>
      <form action="" method="get">
    <p></p>
      <form id="pesquisa"  method="get">
          
          <label  for="nome">Busque pelo Nome do Produto:</label>
          <br>
          <br>
          
          <input id="caixapesq" type="text"  name="local">
          <br>
          <br>
          <input  type="submit" value="BUSCAR">

      </form>
    
    </section>
  </header>
    <section  style="margin-top: 70px; margin-bottom: 345px; text-align: center;">
      <?php 
            
            include "conexao.php";
            if (!empty($_GET['local'])){
            
            $nome = $_GET['local'];
            }
            else{
              $nome = "";
            }
            if (empty($nome)) 
            {
              
              echo "O Resultado da pesquisa é exibido aqui.";
            }
            else 
            {     


                  $sql = "select * from produtos where NomeProduto like '%$nome%'";
                  
                  
                  $listar = mysqli_query($conn, $sql);
                  
                  while ($campo = mysqli_fetch_array($listar)) 
                  {
                  
                        if ($nome == 'brigadeiro')
                        {
                            if ($campo['NomeProduto'] == "Merci Brigadeiros") 
                            {
                            echo "<img id='produtos' src='multimidia/produtos/doces/brigadeiros.jpg'>";
                            ?>
                            <p>Nome: <?php echo $campo['NomeProduto'];?></p>
                            <p>valor: <?php echo $campo['valorProduto'];?></p>
                            <p>Informações: <?php echo $campo['informacoesProduto'];?> </p>
                            <p><button class="btn btn-primary" style="background-color: #20DDDD; margin-top: 30px;"><a style="color: white" href="paginaempresa2.php">Mais Informações</a></button></p>
                            <hr>
                            <?php
                            }
                            elseif ($campo['NomeProduto'] == "A lareira Brigadeiros")
                            {
                              echo "<img id='produtos' src='multimidia/produtos/doces/brigadeiros1.jpg'>";
                              ?>
                              <p>Nome: <?php echo $campo['NomeProduto'];?></p>
                              <p>valor: <?php echo $campo['valorProduto'];?></p>
                              <p>Informações: <?php echo $campo['informacoesProduto'];?> </p>
                              <p><button class="btn btn-primary" style="background-color: #20DDDD; margin-top: 30px;"><a style="color: white" href="paginaempresa.php">Mais Informações</a></button></p>
                              <hr>
                              <?php
                            }
                            else
                            {
                              echo "<img id='produtos' src='multimidia/produtos/doces/doces.jpg'>";
                              ?>
                                <p>Nome: <?php echo $campo['NomeProduto'];?></p>
                                <p>valor: <?php echo $campo['valorProduto'];?></p>
                                <p>Informações: <?php echo $campo['informacoesProduto'];?> </p>
                                <p><button class="btn btn-primary" style="background-color: #20DDDD; margin-top: 30px;"><a style="color: white" href="paginaempresa3.php">Mais Informações</a></button></p>
                                <hr>
                              <?php
                            }
                          }
                         elseif($nome == 'torta')
                          {
                            if ($campo['NomeProduto'] == "Merci Torta Salgada") 
                            {
                              echo "<img id='produtos' src='multimidia/produtos/tortas/Torta Salgada 2.jpg'>";
                              ?>
                              <p>Nome: <?php echo $campo['NomeProduto'];?></p>
                              <p>valor: <?php echo $campo['valorProduto'];?></p>
                              <p>Informações: <?php echo $campo['informacoesProduto'];?> </p>
                              <p><button class="btn btn-primary" style="background-color: #20DDDD; margin-top: 30px;"><a style="color: white" href="paginaempresa2.php">Mais Informações</a></button></p>
                              <hr>
                              <?php
                            }
                            elseif ($campo['NomeProduto'] == "A lareira Torta Salgada")
                            {
                              echo "<img id='produtos' src='multimidia/produtos/tortas/torta salgada.jpg'>";
                              ?>
                              <p>Nome: <?php echo $campo['NomeProduto'];?></p>
                              <p>valor: <?php echo $campo['valorProduto'];?></p>
                              <p>Informações: <?php echo $campo['informacoesProduto'];?> </p>
                              <p><button class="btn btn-primary" style="background-color: #20DDDD; margin-top: 30px;"><a style="color: white" href="paginaempresa.php">Mais Informações</a></button></p>
                              <hr>
                              <?php
                            }
                            else
                            {
                              echo "<img id='produtos' src='multimidia/produtos/tortas/torta salgada 2.jpg'>";
                              ?>
                                <p>Nome: <?php echo $campo['NomeProduto'];?></p>
                                <p>valor: <?php echo $campo['valorProduto'];?></p>
                                <p>Informações: <?php echo $campo['informacoesProduto'];?> </p>
                                <p><button class="btn btn-primary" style="background-color: #20DDDD; margin-top: 30px;"><a style="color: white" href="paginaempresa3.php">Mais Informações</a></button></p>
                                <hr>
                              <?php
                            }
                          }
                          

                            
                  
            } }      
               
          mysqli_close($conn);?>

        
      
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