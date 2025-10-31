<?php

require_once "connect.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro - Byte</title>
  <link rel="stylesheet" href="style/login-Register.css">
  <script src="libs/jquery-3.7.1.min.js"></script>
</head>
<body>
  <div class="container">
        <div class="left">
            <img src="img/LogoBYTE.png" alt="Logo Byte">
        </div>
        <div class="right">
            <form class="loginForm" action="register.act.php" method="post" enctype="multipart/from_data">
                <h2>Cadastre-se</h2>
                <label for="userName">Usuário</label>
                <input type="text" id="txtUserName" required name="user" placeholder="Digite um nome de usuário">
                <label for="email">Email</label>
                <input type="email" id="txtEmail" required name="email" placeholder="exemplo@email.com">
                <label for="senha">Senha</label>
                <input type="password" id="txtSenha" required name="password" placeholder="Digite sua senha">
                <button type="submit">Cadastrar</button>
                <p>Já possuí cadastro? <a href="login.php">fazer login</a></p>
            </form>
        </div>
    </div>
  
    <?php 
    @session_start();
    if(isset($_SESSION['msg'])){ ?>
      <div id="resp">
        <?php echo $_SESSION['msg'];?>
      </div><?php
        unset($_SESSION['msg']);
    }
   ?>
  
</body>
</html>