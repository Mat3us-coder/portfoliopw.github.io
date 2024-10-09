<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/projetos.css">
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Strike&display=swap" rel="stylesheet">
    <title>Projetos</title>
</head>
<body>

<div class="navbar navbar-fixed-top navbar-inverse">
  <div class="navbar-inner">
    <div class="container">

      <!-- .btn-navbar é usado como alternador para conteúdo de barra de navegação colapsável -->
      <button class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>

        <div class="nav-collapse collapse">
            <ul class="nav">
                <li>
                <a href="../sobre/sobremim.php">Sobre Mim</a>
                </li>
                <li>
                <a href="../contatos/contateme.php">Contate-me</a>
                </li>
            </ul>
            
        </div>

      <a class="brand" href="../index.php">Menu</a>
       
      <!-- Tudo que você queira escondido em 940px ou menos, coloque aqui -->
      <div class="nav-collapse collapse">
        <!-- .nav, .navbar-search, .navbar-form, etc -->
      </div> 
    </div>
  </div>
</div>



<style>
    body{
        background-color:black;
    }
</style>

<div class="thumbs">

  <ul class="thumbnails">
    <li class="span4">
      <a href="crawlers/index.php" class="thumbnail">
        <img src="../img/crawlers.png" width="500" alt="">
        <label for="img">Clique para ser redirecionado</label>
      </a>
    </li>
    <h3>Começo de uma criação independente de um site, envolvendo uma gravadora fictícia intitulada "Crawler's".</h3>  
  </ul>


  <div class="projetos">
    <ul class="thumbnails">
      <li class="span3">
        <a href="bhaskara/Bhaskara.php" class="thumbnail">
          <img src="../img/bhaskara.png" width="500" alt="">
          <label for="img">Clique para ser redirecionado</label>
        </a>
      </li>
      <h3>Algorítmo capaz de calcular a fórmula de Bhaskara utilizando a função.</h3>  
    </ul>

    <ul class="thumbnails">
      <li class="span3">
        <a href="PA e PG/index.php" class="thumbnail">
          <img src="../img/progressão.png" width="500" alt="">
          <label for="img">Clique para ser redirecionado</label>
        </a>
      </li>
      <h3>Junto de mais dois alunos [Vitor Gabriel e Arthur Santos], um algorítmo capaz de calcular Progressão Aritmética e Progressão Geométrica.</h3>  
    </ul>
  </div>
  <ul class="thumbnails">
      <li class="span3">
        <a href="" class="thumbnail">
          <img src="../img/gamemaker.png" width="500" alt="">
          <label for="img">Sem testes!</label>
        </a>
      </li>
      <h3>Projeto ainda em seu estágio inicial, feito pelo GameMaker Studio.</h3>  
    </ul>
  </div>

  <div class="container">
    <div class="row">
      <div class="span12">
        <h2>Caso seja de seu interesse, contate-me ou mande sugestões</h2>
        <a class="btn btn-large btn-inverse" href="../contatos/contateme.php">Contate-me</a>
      </div>
    </div>
  </div>

</div>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>