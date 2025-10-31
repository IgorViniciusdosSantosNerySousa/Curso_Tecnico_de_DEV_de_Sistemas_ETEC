<?php
    require_once "backend.php";

    if (isset($_GET['pesquisa'])) {
        echo json_encode(pesquisarPosts($_GET['pesquisa']));
    }