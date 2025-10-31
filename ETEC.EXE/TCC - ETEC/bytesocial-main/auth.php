<?php
@session_start();
include_once 'backend.php';
$uri = @end(
            explode(
                "/",
                $_SERVER['REQUEST_URI']
            )
        );
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
} else {
    if ($uri === 'landingPage.php' || $uri === 'login.php') {
        $_SESSION['user'] = puxarUsuario($email);
        $_SESSION['userId'] = getIdByUsername($_SESSION['user']);
        header("Location: feed.php");
    }
}