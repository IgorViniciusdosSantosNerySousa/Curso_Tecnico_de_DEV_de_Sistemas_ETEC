
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criar Novo Post - Byte</title>
  <link rel="stylesheet" href="style/createPost.css">
  <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
  <script src="libs/jquery-3.7.1.min.js.js"></script>
  <style>
    .ck-editor__editable_inline {
      min-height: 200px;
      border: 1px solid #ccc;
      padding: 10px;
    }
    .ck-editor {
      width: 100% !important;
      border: 0;
    }
    /*.ck {
      border-radius: 15px !important;
    }*/
    .ck.ck-editor__main>.ck-editor__editable:not(.ck-focused) {
      border-color: white;
      border-top: 1px rgb(193, 193, 193) solid !important;
    }

    .ck-reset_all :not(.ck-reset_all-excluded *), .ck.ck-reset, .ck.ck-reset_all {
      border-color: white;
    }

    .ck-focused {
      border-color: white;
    }
    .ck.ck-editor__editable.ck-focused:not(.ck-editor__nested-editable) {
      border-color: white;
      border-top: 1px rgb(193, 193, 193) solid !important;
      box-shadow: 0 0 0 0;
    }

    .ck-reset_all :not(.ck-reset_all-excluded *), .ck.ck-reset_all {
      color: black;
    }
  </style>
</head>
<body>
  <?php
    @session_start();
    include_once("navigationBar.php");
    include_once("auth.php");
  ?>

  <div class="newPost">
    <form class="post" method="post" action="createPost.act.php" enctype="multipart/form-data">

      <label for="Title" class="title">Nova Publicacão</label>

      <label for="titulo">Título</label>
      <input type="text" id="titulo" name="titulo" class="txtTitle" maxlength="300" rows="3" placeholder="Título" required><hr> <!-- Precisa limitar o número de caracteres digitados -->
      <small id="titulo-contador" style="font-size:14px; color:gray;"></small>
      <label for="assunto">Assunto:</label>
      <select id="assunto" name="assunto" required>
        <option value="" disabled selected>(Selecionar Assunto)</option>
        <option value="Computadores">Computadores</option>
        <option value="Conversas">Conversas</option>
        <option value="Dúvida">Dúvida</option>
        <option value="Estudos">Estudos</option>
        <option value="Informação">Informação</option>
        <option value="Meme">Meme</option>
        <option value="Programação">Programação</option>
        <option value="Trabalho">Trabalho</option>
      </select><hr>
      <label for="imagem">Imagem</label>
      <input type="file" id="imagem" name="imagem">

      <label for="imagem" class="fileArea">
        <span class="text" id="file-name-display">(Selecionar Imagem)</span>
      </label><hr>

      <label for="descricao">Descrição</label>
      <div class="descricao-container">
        <textarea id="descricao" name="descricao" placeholder="Escreva aqui…"></textarea>
      </div>

      <div class="buttonArea">
        <input type="submit" value="Publicar"/>
      </div>
    </form>
  </div>

<script src="./scripts/atualizarTag.js"></script>
<script>
  ClassicEditor.create( document.querySelector( '#descricao' ), {
    placeholder: 'Escreva aqui…',
    toolbar: [
      'heading', '|',
      'bold', 'italic', 'link', '|',
      'bulletedList', 'numberedList', '|',
      'blockQuote', 'codeBlock', '|',
      'undo', 'redo'
    ],
    codeBlock: {
        languages: [
          { language: 'plaintext',  label: 'Texto sem formatação' },
          { language: 'javascript', label: 'JavaScript' },
          { language: 'php',        label: 'PHP' },
          { language: 'python',     label: 'Python' },
          { language: 'html',       label: 'HTML' },
          { language: 'css',        label: 'CSS' },
          { language: 'c',          label: 'C' },
          { language: 'cpp',        label: 'C++' },
          { language: 'csharp',     label: 'C#' },
          { language: 'java',       label: 'Java' },
          { language: 'ruby',       label: 'Ruby' },
          { language: 'typescript', label: 'TypeScript' }
        ]
      }
    })
  .catch( error => {
    console.error( error );
  } );
// --- NOVO SCRIPT PARA EXIBIR NOME DO ARQUIVO ---
const fileInput = document.getElementById('imagem');
  const fileNameDisplay = document.getElementById('file-name-display');
  const defaultFileText = 'Selecionar Imagem';

  if (fileInput && fileNameDisplay) {
    fileInput.addEventListener('change', function(event) {
      // Pega o objeto FileList
      const files = event.target.files;

      // Verifica se algum arquivo foi selecionado
      if (files.length > 0) {
        // Pega o nome do primeiro arquivo
        const fileName = files[0].name;
        // Atualiza o texto do span
        fileNameDisplay.textContent = fileName;
      } else {
        // Se nenhum arquivo for selecionado (ou cancelado), volta ao texto padrão
        fileNameDisplay.textContent = defaultFileText;
      }
    });
  }
  
</script>
</body>
<script src="scripts/createPost.js"></script>
<script src="scripts/limitaTitulo.js"></script>
</html>