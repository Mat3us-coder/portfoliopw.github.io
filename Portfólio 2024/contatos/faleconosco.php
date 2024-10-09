<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contateme.css">
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Strike&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Mande Sugestões!</title>
    
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
                <a href="../projetos1/projetos.php">Projetos</a>
                </li>
            </ul>
            

      <a class="brand" href="../index.php">Menu</a>
       
      <!-- Tudo que você queira escondido em 940px ou menos, coloque aqui -->
        <!-- .nav, .navbar-search, .navbar-form, etc -->
    </div>
  </div>
</div>


<style>
    body{
        background-color:black;
    }
</style>

<div class="container">
    <div class="row">
        <div class="span12">
            <form action="" method="get">
                <input type="text" name="nome" placeholder="Seu Nome" id=""><br>
                <input type="number" name="telefone" placeholder= "Número Tel." id=""><br>
                <input type="email" name="email" placeholder="E-Mail" id=""><br>
                <textarea name="sugestoes" placeholder="Sugestões" id=""></textarea><br>
                <input type="submit" value="enviar">
            </form>
        </div>
    </div>
</div>

<?php

if(isset($_GET['enviar'])){
    $nome = $_GET['nome'];
    echo $nome;
}

?>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
    
</body>
</html>