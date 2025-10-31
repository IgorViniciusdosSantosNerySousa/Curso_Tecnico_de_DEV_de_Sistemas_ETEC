<?php

    extract($_POST);
    require('connect.php');
    session_start();
    $destino = "";
    $msg = "";
    $busca = mysqli_query($con, "SELECT * FROM `tb_clientes` WHERE `email` = '$email'");

    if($busca->num_rows == 1){
        //Retornou um Único Registro
        $cliente = mysqli_fetch_assoc($busca);
        if(password_verify($senha,$cliente['senha'])){
            //A Senha Está Correta.
            $_SESSION['logado'] = true;
            $_SESSION['nome'] = $cliente['nome'];
            $_SESSION['email'] = $cliente['email'];
            $_SESSION['foto'] = $cliente['foto'];
            $destino = "listar.php";
            $msg = "Bem-Vindo!";
        } else {
            //A Senha Está Errada
            $destino = "login.php";
            $msg = "Email ou Senha Incorretos. Tente Novamente.";
        }
    }else {
        //Retornou Nenhum ou Mais de um Registro
        $destino = "login.php";
        $msg = "Emial ou Senha Incorretos. Tente Novamente.";
        echo "Retornou nenhum ou Vários Registros.";
    }
    $_SESSION['msg'] = $msg;
    header("location:$destino");