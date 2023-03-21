<?php
 if(!isset($_SESSION)){
    session_start();
}
include("protecao.php")
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' type='image/png' href="./img/Logo_02_Fundo_Transparente.png">
    <link rel="stylesheet" href="./css/csspainel.css">
    <title>Painel</title>
</head>
<body>
<header class="cabecalho">
      <img class="logo" src="./img/Logo_02_Fundo_Transparente.png" alt="">
       
    <nav class="menu">
            <a class="menu-item" href="./index.html">Inicio</a>
            <a class="menu-item" href="./sobrenos.html">Sobre nós</a>
            <a class="menu-item" href="./contato.html">Contato</a>
            <a class="menu-item" href="./funcionarios.php" >Entrar</a>
    </nav> 
</header>
<main class="conteudo">
<div class="login">
            <div class="header">
                <img height="300" style="margin-left: 15%; border: 2px solid black;" src="<?php echo $_SESSION['path'];?>" alt="">
                <h3 class="titulo">Bem vindo(a) <?php echo $_SESSION['NOME'];?>.</h3>
            </div>
            <p class="informacoes">
                <li>Setor: <?php echo $_SESSION['SETOR'];?></li>
                <li>Cargo: <?php echo $_SESSION['CARGO'];?></li>
                <li>Salário: <?php echo $_SESSION['SALÁRIO'];?></li>
                <li>Data Nascimento: <?php echo $_SESSION['DATANASC'];?></li> 
                <li>Id de funcionário: <?php echo $_SESSION['ID'];?></li>
                <button class="conteudo-principal-botao"><a class="botao" href="logout.php">Sair</a></button>
            </p>
        </div>
</main>
</body>
</html>
