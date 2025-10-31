<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Byte</title>
  <link rel="stylesheet" href="style/login-Register.css">

</head>

<body>
  <?php
  session_start();
  if (isset($_SESSION['user'])) {
    header("Location: auth.php");
  }
  ?>

  <section class="container">
    <div class="card registerActive">
      <div class="left">
        <div class="formLogin" action="login.act.php" method="post" enctype="multipart/from_data">
          <img class="logo" src="img/logo.png" alt="Logo Byte">
          <h2>LOGIN</h2>
          <form class="loginForm" action="login.act.php" method="post" enctype="multipart/from_data">
            <input type="email" id="txtEmail" required name="email" placeholder="E-mail">
            <input type="password" id="txtSenha" required name="password" placeholder="Senha">
            <button type="submit">Entrar</button>
          </form>
        </div>

        <div class="containerLogin">
          <h2> Já possuí<br>uma conta?</h2>
          <p>Entre em sua conta agora!</p>
          <button class="loginButton">ENTRAR</button>
        </div>
      </div>

      <div class="right">
        <div class="formRegister">
          <img class="logo" src="img/logo.png" alt="Logo Byte">
          <h2>Cadastro</h2>
          <form class="loginForm" action="register.act.php" method="post" enctype="multipart/from_data">
            <input type="text" id="txtUserName" required name="user" placeholder="Nome">
            <input type="email" id="txtEmail" required name="email" placeholder="E-mail">
            <input type="password" id="txtSenha" required name="password" placeholder="Senha">
            <input type="password" id="txtSenha" required name="password" placeholder="Confirme a sua Senha">
            <button type="submit">Cadastrar-se</button>
          </form>
        </div>

        <div class="containerRegister">
          <h2>Não possui<br>uma conta?</h2>
          <p>Junte-se agora à nossa comunidade!</p>
          <button class="registerButton">Cadastre-se</button>
        </div>
      </div>
    </div>
  </section>

  <div class="modalContainer" id="modalContainer" style="display: <?php echo isset($_SESSION['msg']) ? 'flex' : 'none'; ?>;">
    <div class="modalContent">
      <img src="<?php echo isset($_SESSION['imgSrc']) ? $_SESSION['imgSrc'] : './img/verificado.png'; ?>" alt="">
      <p>
        <?php
        if (isset($_SESSION['msg'])) {
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
          unset($_SESSION['imgSrc']);  // Limpa a imagem depois de exibir
        }
        ?>
      </p>
      <button id="modalOkButton">Ok</button>
    </div>
</div>

  <!-- <?php echo $imgSrc; ?> -->
  <script src="./scripts/slideLogin.js"></script>
</body>

</html>