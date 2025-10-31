<?php
require_once "backend.php";
session_start();
if (isset($_SESSION['user'])) {
    header("Location: auth.php");
}

extract($_POST);

$msg = "";
$imgSrc = ""; 

// validação temporaria:
if ( isset($email) && isset($password) && trim($email) == "" && trim($password) == "") {
    strtolower($email);
    $msg = "Os campos não podem estar vazios!";
    $imgSrc = "./img/botao-x.png";
    $_SESSION['msg'] = $msg;
    $_SESSION['imgSrc'] = $imgSrc;
    header("Location: login.php");
}

if ( checarUsuarioLogin($email, $password) === true ) {
    $_SESSION['user'] = puxarUsuario($email);
    $_SESSION['userId'] = getIdByUsername($_SESSION['user']);
    header("Location: feed.php");
} else {
    $msg = "Email ou senha estão incorretos!";
    $imgSrc = "./img/botao-x.png";
    $_SESSION['msg'] = $msg;
    $_SESSION['imgSrc'] = $imgSrc;
    header("Location: login.php");
}
       
