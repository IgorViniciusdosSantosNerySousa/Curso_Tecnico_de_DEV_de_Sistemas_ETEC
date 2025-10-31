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
    require_once "auth.php";
 ?>

  <section class="container">
        <div class="card registerActive">
          <div class="left">
            <div class="formLogin" action="login.act.php" method="post" enctype="multipart/from_data">
              <img  class="logo" src="img/logo.png" alt="Logo Byte">
              <h2>Fazer Login</h2>
              <form class="loginForm" action="login.act.php" method="post" enctype="multipart/from_data">
                <input type="email" id="txtEmail" required name="email" placeholder="E-mail">
                <input type="password" id="txtSenha" required name="password" placeholder="Senha">
                <button type="submit">Entrar</button>
              </form>

              <?php 
                @session_start();
                if(isset($_SESSION['msg'])){ ?>
                <div id="resp">
                    <?php echo $_SESSION['msg'];?>
                </div><?php
                    unset($_SESSION['msg']);
                }
              ?>
              
            </div> 

            <div class="containerLogin">
              <h2> Já tem<br>uma conta?</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              <button class="loginButton">Faça Login</button>
            </div> 
          </div>

          <div class="right">
            <div class="formRegister">
              <img  class="logo" src="img/logo.png" alt="Logo Byte">
              <h2>Cadastro</h2>
              <form class="loginForm" action="register.act.php" method="post" enctype="multipart/from_data">
                <input type="text" id="txtUserName" required name="user" placeholder="Nome">
                <input type="email" id="txtEmail" required name="email" placeholder="E-mail">
                <input type="password" id="txtSenha" required name="password" placeholder="Senha">
                <input type="password" id="txtSenha" required name="password" placeholder="Confirme a sua Senha">
                <button type="submit">Cadastrar</button>
              </form>

              <?php
                @session_start();
                if(isset($_SESSION['msg'])){ ?>
                <div id="resp">
              <?php echo $_SESSION['msg'];?>
              </div><?php
                unset($_SESSION['msg']);
              }
            ?>
            </div>

            <div class="containerRegister">
              <h2>Não possui<br>uma conta?</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              <button class="registerButton">Cadastre-se</button>
            </div>
          </div>
        </div>

    </section>

    <script>
      let card = document.querySelector(".card");
      let loginButton = document.querySelector(".loginButton");
      let registerButton = document.querySelector(".registerButton");

      loginButton.onclick = () => {
      card.classList.remove("registerActive")
      card.classList.add("loginActive")
    }

    registerButton.onclick = () => {
      card.classList.remove("loginActive")
      card.classList.add("registerActive")
    }
    </script>
</body>
</html>