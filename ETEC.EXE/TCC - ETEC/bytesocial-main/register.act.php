<?php
    require_once "backend.php";
    extract($_POST);
    session_start();
    if (isset($_SESSION['user'])) {
        header("Location: login.php");
    }

    $msg = "";
    $imgSrc = ""; 

    // validação temporaria:
    if (isset($user) && isset($email) && isset($password) && strlen($user) < 31 && strlen($user) > 3 && strlen($password) > 8) {
        strtolower($user);
        strtolower($email);
        if (trim($user, " ") == "" || trim($email, " ") == "" || trim($password, " ") == "" || !preg_match('/^[a-zA-Z0-9]+$/', $user)) {
            $msg = "Os campos não podem estar vazios!<br>Sua senha pode estar muito curta ou seu usuário pode muito curto ou longo.<br>Certifique de usar apenas letras (sem acento) e números.";
            $imgSrc = "./img/botao-x.png";
        } elseif (!checarUsuarioExiste($user, $email) && !checarEmailCadastrado($email)) {
            // Cadastrar usuário caso as condições sejam atendidas
            cadastrarUsuario($user, $email, $password);
            $msg = "Usuário cadastrado com sucesso!";
            $imgSrc = "./img/verificado.png";

            // torna o usuário de id 1 administrador
            if ( getIdByUsername($user) == 1 ) {
                tornarUsuarioAdmin( getIdByUsername($user) );
            }

        } else {
            // Caso o usuário já exista
            $msg = "Usuário com esse email ou username já existe!";
            $imgSrc = "./img/botao-x.png";
        }
    } else {
        $msg = "Por favor, preencha todos os campos corretamente (sem espaços)!";
        $imgSrc = "./img/botao-x.png";
    }
    
    // Armazenando as variáveis na sessão
    $_SESSION['msg'] = $msg;
    $_SESSION['imgSrc'] = $imgSrc;
    

    header("Location: login.php");