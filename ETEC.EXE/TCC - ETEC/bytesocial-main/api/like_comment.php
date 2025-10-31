<?php
include_once("./../backend.php");
header('Content-Type: application/json');
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
@session_start();

define('LIKE_SUCCESS', 1);
define('LIKE_FAILURE', 0);
define('UNLIKE_SUCCESS', 2);
define('UNLIKE_FAILURE', 3);
define('VALID_INTEGER_ERROR', 4);

function likeTrigger($userId, $commentId) {
    if ( !checkUserLikeComment($userId, $commentId) ) {
        if (darLikeComentario($commentId, $userId)) {
            return json_encode(
                [
                    'like_status' => 'Você curtiu esse post',
                    'like_status_code' => LIKE_SUCCESS,
                    'like_count' => carregarNumLikesComentarios($commentId)
                ]
            );
        }
        else {
            return json_encode(
                [
                    'like_status' => 'Falha ao curtir o post.',
                    'like_status_code' => LIKE_FAILURE,
                    'like_count' => carregarNumLikesComentarios($commentId)
                ]
            );
        }
    }
    else if ( checkUserLikeComment($userId, $commentId) ) {
        if (tirarLikeComentario($commentId, $userId)) {
            return json_encode(
                [
                    'like_status' => 'Você removeu a curtida desse post.',
                    'like_status_code' => UNLIKE_SUCCESS,
                    'like_count' => carregarNumLikesComentarios($commentId)
                ]
            );
        }
        else {
            return json_encode(
                [
                    'like_status' => 'Falha ao tentar remover a curtida desse post.',
                    'like_status_code' => UNLIKE_FAILURE,
                    'like_count' => carregarNumLikesComentarios($commentId)
                ]
            );
        }
    }
}

if (isset($_SESSION['user'])) {
    if (isset($_GET['commentId']) && isset($_GET['userId'])) {
        if ( intval($_GET['commentId']) !== 0 && intval($_GET['userId']) !== 0) {
            echo likeTrigger($_GET['userId'], $_GET['commentId']);
        }
        else {
            echo json_encode(
                [
                    'like_status' => 'commentId e UserId não são números válidos.',
                    'like_status_code' => VALID_INTEGER_ERROR,
                    'like_count' => carregarNumLikesComentarios($_GET['commentId'])
                ]
            );
        }
    }
}
else {
    echo json_encode(['status' => 'Usuário não autenticado.']);
}