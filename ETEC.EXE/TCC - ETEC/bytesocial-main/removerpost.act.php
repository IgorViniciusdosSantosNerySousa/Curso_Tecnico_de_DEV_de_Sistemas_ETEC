<?php
require_once "backend.php";
@session_start();
if ( isset($_GET['id_post']) || isset($_GET['id_user']) ) {
    if (check_admin($_SESSION['userId'])[0]["isAdmin"] == 1) {
        apagarPost((int)$_GET['id_post'], mostrarPost((int)$_GET['id_post'])[0]['idUser']);
        header("Location: feed.php");
    }
    else if ($_SESSION['userId'] == $_GET['id_user']) {
        if ( mostrarPost($_GET['id_post'])[0]["id_post"] == $_GET['id_post'] ) {
            apagarPost((int)$_GET['id_post'], (int)$_GET['id_user']);
            header("Location: feed.php");
        }
    } 
}
header("Location: feed.php");