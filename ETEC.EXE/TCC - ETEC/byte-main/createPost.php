<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criar Novo Post - Byte</title>
  <link rel="stylesheet" href="style/createPost.css">
  <script src="./CKEditor/src/main.js"></script>
  <script src="scripts/jquery/jquery-3.7.1.min.js.js"></script>
</head>
<body>
 <?php
  @session_start();
  include('navigationBar.php');
  // if(isset($_SESSION['logado']) && $_SESSION['logado'] == true){
  // }
  ?> 
  <div class="newPost">
    <form class="post">
      
      <label for="Title" class="title">Nova Publicacão</label>
      
      <label>Título:</label>
      <input type="text" class="txtTitle"  placeholder="Titulo"> <!--Não pode ser vazio-->
      
      <label>Assunto:</label>
      <select id="comboBox"> <!--Não pode ser vazio-->
        <option disabled selected>Selecione um Assunto...</option>
        <option>Computadores</option>
        <option>Conversas</option>
        <option>Dúvida</option>
        <option>Estudos</option>
        <option>Informação</option>
        <option>Meme</option>
        <option>Programação</option>
        <option>Trabalho</option>        
      </select>
      <div class="markup">
        <p class="tag"></p>        
      </div>
      <label>Imagem:</label>
        <input type="file" id="file">
      <label for="file" class="fileArea">
        <span class="text">Selecionar Imagem</span>
        <span>Procurar</span>
      </label>
      <label>Descrição:</label>
      <textarea class="CKEditor"></textarea> <!--Não pode ser vazio-->
      <div class="buttonArea">
        <a href="feed.php">Publicar</a> 
      </div>
    </form>
  </div>
<script src="./scripts/atualizarTag.js"></script>

</body>
</html>