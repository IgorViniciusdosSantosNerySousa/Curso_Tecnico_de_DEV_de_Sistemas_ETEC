<?php
header('Content-Type: application/json');
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

include_once("./../backend.php");
@session_start();

if ( isset($_GET['id']) ) {
    if (isset($_GET['id'])) {

        $post = mostrarPost($_GET['id']);
    
        if ($post !== false) {
            if ($post == []) {
                echo json_encode(['error' => 'Nao foi possivel carregar o post.']);
            } else {
                echo json_encode($post);
            }
        } else {
            http_response_code(500); // Internal Server Error
            echo json_encode(['error' => 'Nao foi possivel carregar o post.']);
        }
    } else {
        http_response_code(500); // Internal Server Error
        echo json_encode(['error' => 'Nao foi possivel carregar o post.']);
    }
} else {
    http_response_code(500); // Internal Server Error
    echo json_encode(['error' => 'Id inválido ou inexistente.']);
}