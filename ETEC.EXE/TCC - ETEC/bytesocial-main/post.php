<?php 
  include_once('navigationBar.php');
  include_once('auth.php');
  include_once "backend.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo mostrarPost($_GET['id'])[0]["postTitle"]; ?> - Byte</title>
  <link rel="stylesheet" href="style/feed.css">
  <script src="libs/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
</head>

<body>
<?php

  if (!isset($_GET['id'])) {
    header("Location: feed.php");
  }

  $_SESSION['post_id'] = $_GET['id'];

  $info_ = mostrarPost($_GET['id'])[0];
  $info2 = pegarInfoUsuario($info_['idUser'])[0];

  ?>

  <div class="containerPost">
    <div class="post_and_comment_container">
      <div class="containerPostsOpen">
      </div>
      <form class="comment_post" method="post" action="post.comment.act.php">
        <div class="put-comment-container">
          <textarea id="comment" name="comment" placeholder="Escreva aqui…"></textarea>
        </div>
      <button type="submit" class="enviar-comment-btn">Enviar Comentário</button>
      </form>
      <h1>Comentários (<?php echo mostrarPost($_GET['id'])[0]["quantComentarios"]; ?>):</h1>
      <div id="comments" class="comments">
      </div>
      <button type="submit" class="carregar-comment-btn" onclick="loadComment()">Carregar mais comentários</button>
    </div>


    <div class="userPreview">
      <div class="userImg">
        <img src="<?php if ($info_['userPhoto'] != "") {echo $info_['userPhoto'];} else {echo "./img/profile.png";} ?>" alt="">
      </div>
      <div class="userPostProfile">
        <a class="userPostName" href="profile.php?id=<?php echo $info_['idUser'];?>"><?php echo $info_['userName']; ?></a> <!--Nome do Usuário que fez o post-->
        <p class="userPostVocation"><?php echo $info2['vocation'];?></p>
        <p class="userPostBio"><?php echo $info2['bio'];?></p>
        <button class="follow">Seguir</button>
      </div>
    </div>
  </div>


  <script>
    const id = <?php echo $_GET['id']; ?>

    const containerPosts = $('.containerPostsOpen');

    function createPostElement(post) {
      const postElement = document.createElement('div');
      postElement.className = 'cardPost';

      if (post.postPhoto === null) {
        post.postPhoto = "";
      }

      let likeButtonClass = post.user_has_liked ? 'actived' : '';

      postElement.innerHTML = /*html*/`
        ${post.postPhoto === "" ? "" : '<div class="image"><img class="imagePost" src=' + post.postPhoto + '></div>'}
        <div class="headerTop">
          <a href="./profile.php?id=${post.idUser}" class="user-container">
            <img class="postUserIcon" src="${post.userPhoto === null ? "./style/assets/user.jpg" : post.userPhoto}" alt="">
            <label for="username" class="userName">${post.userName}</label>
          </a>
          <p><a style="text-decoration:none; color:black; font-size:12px; font-family:sans-serif; font-weight:normal" href="./post.php?id=${post.id_post}"></p></a>
        </div>
        <div class="headerBottom">
          <a class="userQuestion" for="descricao" href="./post.php?id=${post.id_post}">${post.postTitle}</a>
          <br>
          <div class="markup">
            <a href="search.php?p=&a=${post.postAssunto}" style="text-decoration: none;">
              <p class="tag">${post.postAssunto}</p>
            </a>
          </div>
        </div>
        <div class="body">
          <div class="description">
            <p class="textPost">${post.postText}</p>
          </div>
        </div>
        <p style="font-size: 13px; font-family: helvetica; color:rgb(122, 121, 121); padding-bottom: 5px; padding-top: 5px;">${post.postDateTime}</p>
        <div class="footer">
          <div class="like-container ${likeButtonClass}"
            data-post-id="${post.id_post}" 
            data-user-id="<?php echo $_SESSION['userId'];?>"
            onclick="toggleLike(this)">
            <span id="like">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                <path d="M1 8.25a1.25 1.25 0 1 1 2.5 0v7.5a1.25 1.25 0 1 1-2.5 0v-7.5ZM11 3V1.7c0-.268.14-.526.395-.607A2 2 0 0 1 14 3c0 .995-.182 1.948-.514 2.826-.204.54.166 1.174.744 1.174h2.52c1.243 0 2.261 1.01 2.146 2.247a23.864 23.864 0 0 1-1.341 5.974C17.153 16.323 16.072 17 14.9 17h-3.192a3 3 0 0 1-1.341-.317l-2.734-1.366A3 3 0 0 0 6.292 15H5V8h.963c.685 0 1.258-.483 1.612-1.068a4.011 4.011 0 0 1 2.166-1.73c.432-.143.853-.386 1.011-.814.16-.432.248-.9.248-1.388Z" />
              </svg>
            </span>
            <p id="like-counter" for="like">${post.quantLikes}</p>
          </div>
          <div class="comment-container">
            <span id="comment">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                <path d="M3.505 2.365A41.369 41.369 0 0 1 9 2c1.863 0 3.697.124 5.495.365 1.247.167 2.18 1.108 2.435 2.268a4.45 4.45 0 0 0-.577-.069 43.141 43.141 0 0 0-4.706 0C9.229 4.696 7.5 6.727 7.5 8.998v2.24c0 1.413.67 2.735 1.76 3.562l-2.98 2.98A.75.75 0 0 1 5 17.25v-3.443c-.501-.048-1-.106-1.495-.172C2.033 13.438 1 12.162 1 10.72V5.28c0-1.441 1.033-2.717 2.505-2.914Z" />
                <path d="M14 6c-.762 0-1.52.02-2.271.062C10.157 6.148 9 7.472 9 8.998v2.24c0 1.519 1.147 2.839 2.71 2.935.214.013.428.024.642.034.2.009.385.09.518.224l2.35 2.35a.75.75 0 0 0 1.28-.531v-2.07c1.453-.195 2.5-1.463 2.5-2.915V8.998c0-1.526-1.157-2.85-2.729-2.936A41.645 41.645 0 0 0 14 6Z" />
              </svg>
            </span>
            <p id="comment-counter" for="comment">${post.quantComentarios}</p>
          </div>
          <div class="vazio">
          </div>
          <div class="menu">
            <button class="menu-toggle" id="menu_toggle_${post.id_post}"> <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M480-160q-33 0-56.5-23.5T400-240q0-33 23.5-56.5T480-320q33 0 56.5 23.5T560-240q0 33-23.5 56.5T480-160Zm0-240q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm0-240q-33 0-56.5-23.5T400-720q0-33 23.5-56.5T480-800q33 0 56.5 23.5T560-720q0 33-23.5 56.5T480-640Z"/></svg>
            </button>
            <div class="menu-open" id="dropdown_${post.id_post}" style="display: none;">
              <?php if ($info_['idUser'] == $_SESSION['userId']) : ?>
              <button id="excluirPost">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
                Excluir Post
              </button>
              <?php elseif (check_admin($_SESSION['userId']) == 1) : ?>
              <button id="excluirPost" style="color:red">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
                Excluir Post (Admin)
              </button>
              <?php else : ?>
              <button id="denunciarPost">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1f1f1f"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.73 3H8.27L3 8.27v7.46L8.27 21h7.46L21 15.73V8.27L15.73 3zM19 14.9L14.9 19H9.1L5 14.9V9.1L9.1 5h5.8L19 9.1v5.8z"/><circle cx="12" cy="16" r="1"/><path d="M11 7h2v7h-2z"/></svg>
                Denunciar Usuário
              </button>
              <?php endif; ?>
            </div>
          </div>
        </div>
      `;

      return postElement;
    }

    function loadPost() {

      fetch(`./api/post.php?id=${id}`)
        .then(response => {
          if (!response.ok) {
            throw new Error(`Erro na requisição: ${response.status}`);
          }
          return response.json();
        })
        .then(data => {
          if (data.error) {
            console.error(data.error);
            window.location.href = "./404.php";
            return; // Parar o processamento se houver um erro
          }
          data.forEach(post => {
            const postElement = createPostElement(post);
            containerPosts.append(postElement);
          });

        })
        .catch(error => {
          console.error('Erro ao carregar post:', error);
        });
    }

    loadPost();

    // comentários:

    const commentPosts = $(".comments");
    let offset = 0;
    const limit = 3;
    let loading = false;
    const userId = <?php echo $_SESSION['userId']; ?>; // Obtém o ID do usuário PHP e passa para o JS
    

    function createCommentElement(comment) {
      const commentElement = document.createElement('div');
      commentElement.className = 'commentContainer';

      if (comment.user_photo === null) {
        comment.user_photo = "";
      }

      let likeButtonClass = comment.user_has_liked ? 'actived' : '';

      commentElement.innerHTML = /*html*/`
        ${comment.comment_image === null ? "" : '<div class="image"><img class="imagePost" src=' + comment.comment_image + '></div>'}
        <div class="headerTop">
          <a href="./profile.php?id=${comment.id_user}" class="user-container">
            <img class="postUserIcon" src="${comment.user_photo === null ? "./style/assets/user.jpg" : comment.user_photo}" alt="">
            <label for="username" class="userName">${comment.username}</label>
          </a>
        </div>
        <div class="body">
          <div class="description">
            <p class="textPost">${comment.comment}</p>
          </div>
        </div>
        <p style="font-size: 13px; font-family: helvetica; color:rgb(122, 121, 121); padding-bottom: 5px; padding-top: 5px;">${comment.comment_datetime}</p>
        <div class="footer">
          <div class="like-container ${likeButtonClass}"
            data-post-id="${comment.id_comment}" 
            data-user-id="<?php echo $_SESSION['userId']?>"
            onclick="toggleLikeComment(this)">
            <span id="like">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                <path d="M1 8.25a1.25 1.25 0 1 1 2.5 0v7.5a1.25 1.25 0 1 1-2.5 0v-7.5ZM11 3V1.7c0-.268.14-.526.395-.607A2 2 0 0 1 14 3c0 .995-.182 1.948-.514 2.826-.204.54.166 1.174.744 1.174h2.52c1.243 0 2.261 1.01 2.146 2.247a23.864 23.864 0 0 1-1.341 5.974C17.153 16.323 16.072 17 14.9 17h-3.192a3 3 0 0 1-1.341-.317l-2.734-1.366A3 3 0 0 0 6.292 15H5V8h.963c.685 0 1.258-.483 1.612-1.068a4.011 4.011 0 0 1 2.166-1.73c.432-.143.853-.386 1.011-.814.16-.432.248-.9.248-1.388Z" />
              </svg>
            </span>
            <p id="like-counter" for="like">${comment.like_count.quantLikes}</p>
          </div>
          <div class="vazio">
          </div>
          <div class="menu">
            <button class="menu-toggle" id="menu_toggle_${comment.id_comment}"> <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M480-160q-33 0-56.5-23.5T400-240q0-33 23.5-56.5T480-320q33 0 56.5 23.5T560-240q0 33-23.5 56.5T480-160Zm0-240q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm0-240q-33 0-56.5-23.5T400-720q0-33 23.5-56.5T480-800q33 0 56.5 23.5T560-720q0 33-23.5 56.5T480-640Z"/></svg>
            </button>
            <div class="menu-open" id="" style="display: none;"> <button id="excluirPost">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
                Excluir Comentário
              </button>
              <button id=" ">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#1f1f1f"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.73 3H8.27L3 8.27v7.46L8.27 21h7.46L21 15.73V8.27L15.73 3zM19 14.9L14.9 19H9.1L5 14.9V9.1L9.1 5h5.8L19 9.1v5.8z"/><circle cx="12" cy="16" r="1"/><path d="M11 7h2v7h-2z"/></svg>
                Denunciar Comentário
              </button>
            </div>
          </div>
        </div>
      `;
      return commentElement;
    }

    function loadComment() {
      fetch(`./api/comments.php?userId=${userId}&postId=${id}&offset=${offset}&limit=${limit}`)
        .then(response => {
          if (!response.ok) {
            throw new Error(`Erro na requisição: ${response.status}`);
          }
          return response.json();
        })
        .then(data => {
          if (data.error) {
            //console.error(data.error);
            //window.location.href = "./404.php";
            //return; // Parar o processamento se houver um erro
          }
          data.forEach(comment => {
            const commentElement = createCommentElement(comment);
            commentPosts.append(commentElement);
          });
          offset += limit;
        })
        .catch(error => {
          console.error('Erro ao carregar post:', error);
        });
    }

    loadComment();

  </script>

  <div class="modalContainer" id="excluirModal">
    <div class="excluirPostContent">
      <h1>Deseja Excluir este Post?</h1>
      <p>Você não poderá desfazer esta ação!</p>
      <div>
        <button class="cancelar">Cancelar</button>
        <a style="text-decoration: none;" href="./removerpost.act.php?id_post=<?php echo $_GET['id']; ?>&id_user=<?php echo $_SESSION['userId']; ?>"><button class="excluir">Excluir</button></a>
      </div>
    </div>
  </div>

  <div class="modalContainer" id="denunciarModal">
    <div class="denunciarPostContent">
      <h1>Deseja Denunciar esta publicação?</h1>
      <p>Descreva o problema em mais detalhes:</p>
      <textarea name="problema" id="denunciaText"></textarea>
      <div>
        <button class="cancelar">Cancelar</button>
        <button class="denunciar">Denunciar</button>
      </div>
    </div>
  </div>

</body>
<script>
async function toggleLike(element) {
  const postId = element.getAttribute('data-post-id');
  const userId = element.getAttribute('data-user-id');
  const likeCounter = element.querySelector('#like-counter');
  const svg = element.querySelector('svg');

  // Envia a requisição
  const res = await fetch(`./api/likes.php?postId=${postId}&userId=${userId}`, {
    credentials: 'same-origin'
  });
  const data = await res.json();

  likeCounter.textContent = data.like_count.quantLikes;
  if (data.like_status_code === 1) {
    element.classList.add('actived');
  } else if (data.like_status_code === 2) {
    element.classList.remove('actived');
  }
}

async function toggleLikeComment(element) {
  const commentId = element.getAttribute('data-post-id');
  const userId = element.getAttribute('data-user-id');
  const likeCounter = element.querySelector('#like-counter');
  const svg = element.querySelector('svg');

  // Envia a requisição
  const res = await fetch(`./api/like_comment.php?commentId=${commentId}&userId=${userId}`, {
    credentials: 'same-origin'
  });
  const data = await res.json();

  likeCounter.textContent = data.like_count.quantLikes;
  if (data.like_status_code === 1) {
    element.classList.add('actived');
  } else if (data.like_status_code === 2) {
    element.classList.remove('actived');
  }
}

ClassicEditor.create( document.querySelector( '.put-comment-container>#comment' ), {
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
</script>
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
    <script src="scripts/feed.js"></script>
</html>