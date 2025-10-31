<?php

header('Content-Type: application/json');
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

include_once("./../backend.php");
@session_start();

if (isset($_GET['userId'])) {

    $lim = 0;
    $offset = 0;

    if (!isset($_GET['offset']) || !isset($_GET['limit'])) {
        $lim = 10;
        $offset = 0;
    } else {
        $offset = (int)$_GET['offset'];
        $lim = (int)$_GET['limit'];
    }

    $posts = carregarPostsFeed($_GET['userId'], $lim, $offset);

    if ($posts !== false) {
        echo json_encode($posts);
    } else {
        http_response_code(500); // Internal Server Error
        echo json_encode(['error' => 'Nao foi possivel carregar os posts.']);
    }
} else {
    echo json_encode(['error' => 'Nao foi possivel carregar os posts.']);
}

/* 

exemplo de retorno do carregarPostsFeed()

[
  {
    "id_post": 123, // Inteiro - ID do post
    "postTitle": "Título do Post", // String - Título do post
    "postText": "Conteúdo do post...", // String - Texto do post
    "postPhoto": "caminho/para/foto.jpg", // String - URL ou caminho da foto do post
    "postAssunto": "Assunto Principal", // String - Assunto do post
    "postDateTime": "2024-05-07 10:30:00", // String - Data e hora da postagem
    "authorId": 45, // Inteiro - ID do autor do post
    "authorName": "Nome do Autor", // String - Nome do autor do post
    "authorPhoto": "caminho/para/foto_autor.jpg", // String - URL ou caminho da foto do autor
    "like_count": 15, // Inteiro - Número de curtidas no post (retornado por carregarNumLikes)
    "comment_count": 7, // Inteiro - Número de comentários no post (retornado por getNumComentario)
    "user_has_liked": true // Booleano - Indica se o usuário logado ($userId) curtiu este post (retornado por checkUserLikePost) ou false se $userId não for fornecido.
  },
  {
    // ... outro post com a mesma estrutura
  }
]

*/



?>