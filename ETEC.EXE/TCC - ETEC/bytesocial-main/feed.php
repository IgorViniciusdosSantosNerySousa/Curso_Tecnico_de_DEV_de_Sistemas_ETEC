<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Início - Byte</title>
  <link rel="stylesheet" href="style/feed.css">
  <script src="libs/jquery-3.7.1.min.js"></script>
  <script src="scripts/feed.js"></script>
</head>

<body>
  <?php
  include('navigationBar.php');
  include('auth.php');
  ?>

  <div class="container">
    <div class="containerPosts">
    </div>
    <div class="options">
      <a class="createPost" href="createPost.php">
        <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM16 12.75H12.75V16C12.75 16.41 12.41 16.75 12 16.75C11.59 16.75 11.25 16.41 11.25 16V12.75H8C7.59 12.75 7.25 12.41 7.25 12C7.25 11.59 7.59 11.25 8 11.25H11.25V8C11.25 7.59 11.59 7.25 12 7.25C12.41 7.25 12.75 7.59 12.75 8V11.25H16C16.41 11.25 16.75 11.59 16.75 12C16.75 12.41 16.41 12.75 16 12.75Z" fill="#f1f1f1" />
        </svg>
        Criar Post
      </a>
      <div class="view">
        <ul>
          <h3 class="topic">Nesta Página</h3>
          <a href="feed.php" style="text-decoration: none;">
            <li class="subjectOption">Postagens</li>
          </a>
          <li class="subjectOption">Usuários</li>
        </ul>
        <ul class="topicList">
          <h3 class="topic">Tópicos</h3>
          <a href="search.php?p=&a=Computadores" style="text-decoration: none;">
            <li class="subjectOption">Computadores</li>
          </a>
          <a href="search.php?p=&a=Conversas" style="text-decoration: none;">
            <li class="subjectOption">Conversas</li>
          </a>
          <a href="search.php?p=&a=Dúvida" style="text-decoration: none;">
              <li class="subjectOption">Dúvida</li>
          </a>
          <a href="search.php?p=&a=Estudos" style="text-decoration: none;">
              <li class="subjectOption">Estudos</li>
          </a>
          <a href="search.php?p=&a=Informação" style="text-decoration: none;">
              <li class="subjectOption">Informação</li>
          </a>
          <a href="search.php?p=&a=Meme" style="text-decoration: none;">
              <li class="subjectOption">Memes</li>
          </a>
          <a href="search.php?p=&a=Programação" style="text-decoration: none;">
              <li class="subjectOption">Programação</li>
          </a>
          <a href="search.php?p=&a=Trabalho" style="text-decoration: none;">
              <li class="subjectOption">Trabalho</li>
          </a>
        </ul>
      </div>
    </div>
  </div>

  <script>
    const userId = <?php echo $_SESSION['userId']; ?>; // Obtém o ID do usuário PHP e passa para o JS
    let offset = 0;
    const limit = 8;
    let loading = false;

    const containerPosts = $('.containerPosts');

    function createPostElement(post) {
      const postElement = document.createElement('div');
      postElement.className = 'cardPost';

      if (post.postPhoto === null) {
        post.postPhoto = "";
      }
      let linkPostCompleto = `<a style="color: black; text-decoration: none;" href="./post.php?id=${post.id_post}">...</a>`;
      if (post.postText.length < 150) {
        linkPostCompleto = "";
      }

      let likeButtonClass = post.user_has_liked ? 'actived' : '';

      postElement.innerHTML = /*html*/ `
        <div class="headerTop">
          <a href="./profile.php?id=${post.authorId}" class="user-container">
            <img class="postUserIcon" src="${post.authorPhoto === null ? "./style/assets/user.jpg" : post.authorPhoto}" alt="">
            <label for="username" class="userName">${post.authorName}</label>
          </a>
          <p class="postLink"><a class="postId" href="./post.php?id=${post.id_post}"></a></p>
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
            <p class="textPost">${post.postText}${linkPostCompleto}</p>
          </div>
          ${post.postPhoto === "" ? "" : '<div class="image"><img class="imagePost" src=' + post.postPhoto + '></div>'}
          <p style="font-size: 13px; font-family: helvetica; color:rgb(122, 121, 121); padding-bottom: 5px;">${post.postDateTime}</p>
        </div>
        <div class="footer">
          <div class="like-container ${likeButtonClass}"
            data-post-id="${post.id_post}" 
            data-user-id="<?php echo $_SESSION['userId'] ?>"
            onclick="toggleLike(this)">
            <span id="like">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#464f4d" class="size-5">
                <path d="M1 8.25a1.25 1.25 0 1 1 2.5 0v7.5a1.25 1.25 0 1 1-2.5 0v-7.5ZM11 3V1.7c0-.268.14-.526.395-.607A2 2 0 0 1 14 3c0 .995-.182 1.948-.514 2.826-.204.54.166 1.174.744 1.174h2.52c1.243 0 2.261 1.01 2.146 2.247a23.864 23.864 0 0 1-1.341 5.974C17.153 16.323 16.072 17 14.9 17h-3.192a3 3 0 0 1-1.341-.317l-2.734-1.366A3 3 0 0 0 6.292 15H5V8h.963c.685 0 1.258-.483 1.612-1.068a4.011 4.011 0 0 1 2.166-1.73c.432-.143.853-.386 1.011-.814.16-.432.248-.9.248-1.388Z" />
              </svg>
            </span>
            <p id="like-counter" for="like">${post.like_count.quantLikes}</p>
          </div>
          <a style="text-decoration: none; color:black;" href="./post.php?id=${post.id_post}#comments">
          <div class="comment-container">
            <span id="comment">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#464f4d" class="size-5">
                <path d="M3.505 2.365A41.369 41.369 0 0 1 9 2c1.863 0 3.697.124 5.495.365 1.247.167 2.18 1.108 2.435 2.268a4.45 4.45 0 0 0-.577-.069 43.141 43.141 0 0 0-4.706 0C9.229 4.696 7.5 6.727 7.5 8.998v2.24c0 1.413.67 2.735 1.76 3.562l-2.98 2.98A.75.75 0 0 1 5 17.25v-3.443c-.501-.048-1-.106-1.495-.172C2.033 13.438 1 12.162 1 10.72V5.28c0-1.441 1.033-2.717 2.505-2.914Z" />
                <path d="M14 6c-.762 0-1.52.02-2.271.062C10.157 6.148 9 7.472 9 8.998v2.24c0 1.519 1.147 2.839 2.71 2.935.214.013.428.024.642.034.2.009.385.09.518.224l2.35 2.35a.75.75 0 0 0 1.28-.531v-2.07c1.453-.195 2.5-1.463 2.5-2.915V8.998c0-1.526-1.157-2.85-2.729-2.936A41.645 41.645 0 0 0 14 6Z" />
              </svg>
            </span>
            <p id="comment-counter" for="comment">${post.comment_count.quantComentarios}</p>
          </div>
          </a>
        </div>
      `;

      return postElement;
    }


    function loadPosts() {
      if (loading) return;
      loading = true;

      fetch(`./api/feed.php?userId=${userId}&limit=${limit}&offset=${offset}`)
        .then(response => {
          if (!response.ok) {
            throw new Error(`Erro na requisição: ${response.status}`);
          }
          return response.json();
        })
        .then(data => {
          if (data.error) {
            console.error(data.error);
            return; // Parar o processamento se houver um erro
          }
          data.forEach(post => {
            const postElement = createPostElement(post);
            containerPosts.append(postElement);
          });

          offset += limit;
          loading = false;
        })
        .catch(error => {
          console.error('Erro ao carregar posts:', error);
          loading = false;
        });
    }

    loadPosts(); // Carrega os primeiros posts

    $(window).scroll(function() {
      if ($(window).scrollTop() + $(window).height() >= $(document).height() - 200) {
        loadPosts();
      }
    });

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
  </script>
</body>

</html>