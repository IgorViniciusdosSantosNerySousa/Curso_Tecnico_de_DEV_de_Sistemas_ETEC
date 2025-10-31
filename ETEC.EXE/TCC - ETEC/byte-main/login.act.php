<?php
require_once "backend.php";
session_start();
if (isset($_SESSION['user'])) {
    header("Location: auth.php");
}

extract($_POST);

$msg = "";

// validação temporaria:
if ( isset($email) && isset($password) && trim($email) == "" && trim($password) == "") {
    $msg = "Os campos não podem estar vazios!";
    $_SESSION['msg'] = $msg;
    header("Location: login.php");
}

if ( checarUsuarioLogin($email, $password) === true ) {
    $_SESSION['user'] = puxarUsuario($email);
    header("Location: auth.php");
} else {
    $msg = "Email ou senha estão incorretos!";
    $_SESSION['msg'] = $msg;
    header("Location: login.php");
}
       
