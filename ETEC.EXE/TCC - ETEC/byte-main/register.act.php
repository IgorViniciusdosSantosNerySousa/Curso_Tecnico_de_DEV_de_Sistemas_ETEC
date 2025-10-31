<?php
    require_once "backend.php";
    extract($_POST);
    session_start();
    if (isset($_SESSION['user'])) {
        header("Location: auth.php");
    }
    $msg = "";

    // validação temporaria:
    if ( isset($user) && isset($email) && isset($password) &&
        trim($user) == "" && trim($email) == "" && trim($password) == "") {
        $msg = "Os campos não podem estar vazios!";
        $_SESSION['msg'] = $msg;
        header("Location: register.php");
    }
    
    if ( !checarUsuarioExiste($user, $email) === true ) {
        // adicionar validação de input
        cadastrarUsuario($user, $email, $password);
        $msg = "Usuário cadastrado com sucesso, clique em fazer login para fazer login!";
    } else {
        $msg = "Usuário com esse email ou username já existe!";
    }
           
    $_SESSION['msg'] = $msg;

    header("Location: register.php");