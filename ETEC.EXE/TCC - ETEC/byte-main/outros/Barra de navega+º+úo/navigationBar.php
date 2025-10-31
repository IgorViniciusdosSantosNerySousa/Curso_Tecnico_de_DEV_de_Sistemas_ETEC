<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/navigationBar.css">
    <title>Byte</title>
</head>
<body>
    <header>
        <!-- Ao clicar deve sair da conta logada -->
        <div class="nav_bar_Community">
            <a href="feed.html"><img class="logo_nav" src="icons/Logo_byte.png" alt="Logo Byte"></a>
            <div class="searchArea">
              <input type="search" class="searchBar" placeholder="Pesquisar Posts e usuários...">
              <img class="iconSearch" src="icons/lupa (1).png" alt="Pesquisar">
            </div>
            
          <!-- Menu de icones -->
          <ul class="nav_options_Community">
            <li class="option"><a href="feed.html"><img class="icons" src="icons/casa.png" alt="início"></a></li>
            <li class="option"><a href="newPost.html"><img class="icons" src="icons/botao-adicionar.png" alt="Criar Post"></a></li>
            <li class="option"><a href="#"><img class="icons" src="icons/adicionar-amigo.png" alt="Usuários"></a></li>
            <li class="option"><a href="#"><img class="icons" src="icons/sino.png" alt="Notificações"></a></li>
          </ul>

          <!-- Menu do Usuário burguer -->
          <div class="user-toggle" onclick="toggleUser()">
            <p class="user">Olá, User</p>
            <div class="btnUser">
              <img class="user-pic" src="icons/user.png" alt="foto do usuário">
            </div>
          </div>

          <!-- Burguer menu do usuário -->
          <nav class="navUser" id="navUser">
            <ul class="navListUser">
              <li class="navItemUser"><a class="navLinkUser" href="#">Perfil</a></li> <!-- Ao clicar leva o usuário para o perfil dele -->
              <li class="navItemUser"><a class="navLinkUser" href="#">Editar Perfil</a></li> <!-- Ao clicar irá abrir uma tela possibilitando a alteração das informaçoes do perfil do usuário -->
              <li class="navItemUser"><a class="navLinkUser" href="#">Sair</a></li>    <!-- Ao clicar deve sair da conta logada -->
            </ul>
          </nav>
    </div>

    <!-- Menu Pesquisar -->
  <nav class="nav" id="nav">
    <ul class="navList">
      <li class="navItem"><img class="icons"src="icons/lupa (1).png"><a class="navLink" href="#">Pesquisar</a></li>
      <li class="navItem"><img class="icons"src="icons/casa.png"><a class="navLink" href="Feed.html">Início</a></li>
      <li class="navItem"><img class="icons"src="icons/botao-adicionar.png"><a class="navLink" href="newPost.html">Criar Post</a></li>
      <li class="navItem"><img class="icons"src="icons/adicionar-amigo.png"><a class="navLink" href="#">Usuários</a></li>
      <li class="navItem"><img class="icons"src="icons/sino.png"><a class="navLink" href="#">Notificações</a></li>
      <li class="navItem"><img class="icons"src="icons/sair.png"><a class="navLink" href="#">Sair</a></li>       
    </ul>
  </nav>

  <!-- Area clicavel do burguer -->
  <div class="btnMenu" onclick="toggleMenu()">
    <div class="btnBurger"></div>
  </div>
    </header>
    
    <!-- javascript do burguer -->
    <script src="scripts/Burger.js"></script>
</body>
</html>