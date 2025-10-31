<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Início - Byte</title>
  <link rel="stylesheet" href="style/feed.css">
  <script src="libs/jquery-3.7.1.min.js"></script>
</head>
<body>
<!-- Incluindo a barra de navegação do site quando o usuário estiver logado -->
 <?php
  include('navigationBar.php');
  ?> 

  <div class="container">
  <!-- Menu lateral Esquerda -->
  <div class="containerTopic">
    <ul class="topicList">
      <li class="topic">Tópicos</li>
      <li>Programação</li>
      <li>Computadores</li>
      <li>Trabalho</li>
      <li>Memes</li>
      <li>Estudos</li>
    </ul>
  </div>
  
  <!-- Postagens -->
    <div class="containerPosts">
      <div class="cardPost">
        <div class="headerTop">
          <img class="postUserIcon" src="#" alt="">
          <label for="username" class="userName">user</label>
        </div>
        
        <div class="headerBottom">
          <label class="userQuestion" for="descricao">titulo</label>
          
          <div class="markup">
            <p class="tag"></p>
          </div>
        </div>
        
        <!-- Corpo da postagem -->
        <div class="body">
          <div class="description">
            <p class="textPost">texto</p>
          </div>
          
          <div class="image">
            <img class="imagePost" src="#">
          </div>
        </div>

        <!-- Rodapé da postagem -->
        <div class="footer">

          <!-- Contador de Likes -->
          <button id="like"></button>
          <label for="like">99</label>
          
          <!-- Contador de Comentários -->
           <button id="comment"></button>
          <label for="comment">99</label>
        </div>
      </div>      
    </div>
  
    <!-- Menu lateral direita -->
    <div class="options">
    <a class="createPost" href="createPost.php">Criar Post</a>
      <div class="view">
        <ul>
          <li class="topic">Nesta Página</li>
          <li>Postagens</li>
          <li>Usuários</li>
        </ul>
      </div>
    </div>
</div>
</body>
</html>
