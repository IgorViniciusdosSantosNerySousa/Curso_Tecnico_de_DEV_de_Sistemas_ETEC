<?php
session_start();
require_once "auth.php"; 
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="style/landing.css">
  <title>Byte - Rede Social para Programadores!</title>
</head>

<body>
  <header>
    <div class="navBar">
    <img class="logoNav" src="img/logo.png" alt="Logo Byte">
    <ul class="navOptions">
      <li><a href="#">Soluções</a></li>
      <li><a href="#">Equipe</a></li>
      <li><a href="#">Sobre</a></li>
      <li><a href="#">Contato</a></li>
    </ul>
    <p class="register"><a href="login.php">Login</a></p>
  </div>
  <div class="btnMenu" onclick="toggleMenu()">
    <div class="btnBurger"></div>
  </div>
  <nav class="nav" id="nav">
    <ul class="navList">
      <li class="navItem"><a href="login.php" class="navLink">Login</a></li>
      <li class="navItem"><a href="#" class="navLink">Home</a></li>
      <li class="navItem"><a href="#" class="navLink">Sobre</a></li>
      <li class="navItem"><a href="#" class="navLink">Serviços</a></li>
      <li class="navItem"><a href="#" class="navLink">Contato</a></li>
    </ul>
  </nav>
  </header>
  
  <section class="principal">
        <h1>Conheça a Byte, rede social dos programadores</h1>
        <p>Feita e pensada por programadores, para #Pessoas terem um espaço colaborativo entre si.</p>
        <a href="login.php" class="btnRegister">Conecte-se em nossa comunidade</a>
    </section>

    <section class="offer">
        <h2>O que a Byte tem a oferecer?</h2>
        <div class="benefits">
            <div class="benefit">
              <img src="img/illustration1.png" alt="">
              <h1>Ambiente colaborativo de aprendizado e ensino</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius adipisci culpa ea maxime vitae in ex ducimus odio consequatur aliquam excepturi sapiente, magni a, enim ad. Dicta odio omnis iste!</p>
            </div>
            <div class="benefit">
              <h1>Compartilhar seus projetos</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt deleniti magnam quae temporibus modi eaque fugiat at consectetur suscipit minus molestiae aut corrupti aliquid, non ea molestias ducimus nihil facilis.</p> 
              <img src="img/" alt="">
            </div>
            <div class="benefit">
              <img src="img/" alt="">
              <h1>Faça Networking com outras pessoas da área</h1>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea rerum qui nostrum! Perferendis error optio porro alias officiis tempore voluptas quasi. Voluptatibus distinctio obcaecati architecto sit veniam id itaque fugiat.</p>
            </div>
            <div class="benefit">
              <h1>Compartilhe suas conquistas profissionais e estudantis</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, aut aspernatur consequatur amet qui dolore reiciendis fugiat atque exercitationem magnam accusantium natus, quo est sed aliquam voluptate facilis obcaecati enim.</p>
              <img src="img/" alt="">
            </div>
        </div>
    </section>

    <section class="reviews">
        <h2>O que as pessoas estão falando da Byte?</h2>
        <div class="comments">
            <div class="comment">🗨️ Nome da Pessoa - Avaliação...</div>
            <div class="comment">🗨️ Nome da Pessoa - Avaliação...</div>
            <div class="comment">🗨️ Nome da Pessoa - Avaliação...</div>
        </div>
    </section>

    <section class="about">
        <h2>Sobre Nós</h2>
        <p>A Byte nasceu da necessidade de criar um espaço dedicado exclusivamente para programadores e entusiastas da tecnologia. Somos mais do que apenas uma rede social — somos uma comunidade voltada ao aprendizado, à troca de experiências e ao networking no setor de TI.</p>
        <p>Na Byte, você pode compartilhar seus projetos, trocar conhecimentos com outros programadores e participar de discussões que agregam valor à sua carreira.</p>
    </section>

    <section class="contact">
        <h2>Contato</h2>
        <form>
            <input type="text" placeholder="Nome" required>
            <input type="email" placeholder="Email" required>
            <select class="combobox">
              <option value="">Assunto</option>
              <option value="">Dúvida</option>
              <option value="">Informação sobre o site</option>
              <option value="">Opinião</option>
              <option value="">Reclamação</option>
              <option value="">Elogio</option>
            </select>
            <textarea placeholder="Mensagem" required></textarea>
            <button type="submit">Enviar</button>
        </form>
      <img class="logoBottom" src="img/logo.png">
    </section>

    <footer>
        <p>© 2025 Byte</p>
    </footer>
  
  <script src="scripts/Burger.js"></script>
</body>
</html>