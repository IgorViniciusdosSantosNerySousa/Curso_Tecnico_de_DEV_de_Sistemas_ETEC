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

function likeTrigger($userId, $postId) {
    if ( !checkUserLikePost($userId, $postId) ) {
        if (darLikePost($postId, $userId)) {
            return json_encode(
                [
                    'like_status' => 'Você curtiu esse post',
                    'like_status_code' => LIKE_SUCCESS,
                    'like_count' => carregarNumLikes($postId)
                ]
            );
        }
        else {
            return json_encode(
                [
                    'like_status' => 'Falha ao curtir o post.',
                    'like_status_code' => LIKE_FAILURE,
                    'like_count' => carregarNumLikes($postId)
                ]
            );
        }
    }
    else if ( checkUserLikePost($userId, $postId) ) {
        if (tirarLikePost($postId, $userId)) {
            return json_encode(
                [
                    'like_status' => 'Você removeu a curtida desse post.',
                    'like_status_code' => UNLIKE_SUCCESS,
                    'like_count' => carregarNumLikes($postId)
                ]
            );
        }
        else {
            return json_encode(
                [
                    'like_status' => 'Falha ao tentar remover a curtida desse post.',
                    'like_status_code' => UNLIKE_FAILURE,
                    'like_count' => carregarNumLikes($postId)
                ]
            );
        }
    }
}

if (isset($_SESSION['user'])) {
    if (isset($_GET['postId']) && isset($_GET['userId'])) {
        if ( intval($_GET['postId']) !== 0 && intval($_GET['userId']) !== 0) {
            echo likeTrigger($_GET['userId'], $_GET['postId']);
        }
        else {
            echo json_encode(
                [
                    'like_status' => 'PostId e UserId não são números válidos.',
                    'like_status_code' => VALID_INTEGER_ERROR,
                    'like_count' => carregarNumLikes($_GET['postId'])
                ]
            );
        }
    }
}
else {
    echo json_encode(['status' => 'Usuário não autenticado.']);
}