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
  // @session_start();
  // if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
     
  // }
  
  ?>

  <?php
  echo "<div class=container>";
// Menu lateral Esquerda
  echo "<div class=containerTopic>";
    echo "<ul class=topicList>";
      echo "<li class=topic>Tópicos</li>";
      echo "<li>Programação</li>";
      echo "<li>Computadores</li>";
      echo "<li>Trabalho</li>";
      echo "<li>Memes</li>";
      echo "<li>Estudos</li>";
    echo "</ul>";
  echo "</div>";
  
  // <!-- Postagens -->
  <section>
  echo "<div class=containerPosts>";
    echo "<div class=cardPost>";
      echo "<div class=headerTop>";
        echo "<img class=postUserIcon src=icons/user.png alt=userName>";
        echo "<label for=username class=userName>UmUsario.ai</label>";
      echo "</div>";
        
      echo "<div class=headerBottom>";         
        echo "<label class=userQuestion for=descricao>Quem pregunto?</label>";
          
        echo "<div class=markup>";
          echo "<p class=tag></p>";        
          echo "</div>";
        echo "</div>";
        
        // <!-- Corpo da postagem -->
        echo "<div class=body>";
          
        echo "<div class=description>";
          echo "<p class=textPost>Mais q 3 linha num leio 🤪🤪</p>";
        echo "</div>";
          
        echo "<div class=image>";
        echo "<img class=imagePost src=img/sim.jpg>";
        echo "</div>";
        echo "</div>";

        // <!-- footer da postagem -->
        echo "<div class=footer>";

          // <!--Icone de Café-->
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6 2.5C5.44772 2.5 5 2.94772 5 3.5V5.5C5 6.05228 5.44772 6.5 6 6.5C6.55228 6.5 7 6.05228 7 5.5V3.5C7 2.94772 6.55228 2.5 6 2.5Z"
              fill="currentColor"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M13 21.5C15.973 21.5 18.441 19.3377 18.917 16.5H19C21.2091 16.5 23 14.7091 23 12.5C23 10.2909 21.2091 8.5 19 8.5V7.5H1V15.5C1 18.8137 3.68629 21.5 7 21.5H13ZM3 9.5V15.5C3 17.7091 4.79086 19.5 7 19.5H13C15.2091 19.5 17 17.7091 17 15.5V9.5H3ZM21 12.5C21 13.6046 20.1046 14.5 19 14.5V10.5C20.1046 10.5 21 11.3954 21 12.5Z"
              fill="currentColor"/>
            <path d="M9 3.5C9 2.94772 9.44771 2.5 10 2.5C10.5523 2.5 11 2.94772 11 3.5V5.5C11 6.05228 10.5523 6.5 10 6.5C9.44771 6.5 9 6.05228 9 5.5V3.5Z"
              fill="currentColor"/>
            <path d="M14 2.5C13.4477 2.5 13 2.94772 13 3.5V5.5C13 6.05228 13.4477 6.5 14 6.5C14.5523 6.5 15 6.05228 15 5.5V3.5C15 2.94772 14.5523 2.5 14 2.5Z"
              fill="currentColor"/>
          </svg>
          
          // <!--Contador de Likes-->
          echo "<label for=likes>9</label>";
          
          // <!--Icone Comentários-->
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17 9H7V7H17V9Z" fill="currentColor" />
            <path d="M7 13H17V11H7V13Z" fill="currentColor" />
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M2 18V2H22V18H16V22H14C11.7909 22 10 20.2091 10 18H2ZM12 16V18C12 19.1046 12.8954 20 14 20V16H20V4H4V16H12Z"
              fill="currentColor"/>
          </svg>
          
          // <!--Contador de Comentários-->
          echo "<label for=comments>3</label>";
        echo "</div>";
      echo "</div>";      
    echo "</div>";
  </section>

  // <!-- Menu lateral direita -->
  echo "<div class=options>";
    echo "<button>Criar Post</button>";
      echo "<div class=view>";
        echo "<ul>";
          echo "<li class=topic>Nesta Página</li>";
          echo "<li>Postagens</li>";
          echo "<li>Usuários</li>";
        echo "</ul>";
    echo "</div>";
  echo "</div>";

echo "</div>";
?>
</body>
</html>