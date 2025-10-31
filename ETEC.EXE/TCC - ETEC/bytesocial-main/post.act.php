<?php
    extract($_POST);

    session_start();
    require('connect.php');
    $senha = password_hash($senha, PASSWORD_DEFAULT);
    
    $msg = "";

    if(mysqli_query($con, "INSERT INTO `post` 
            (`id_post`,`postTitle`,`postPhoto`,`postDescription`,`postDateTime`) VALUES 
            (NULL,'$titulo','$foto','$descricao','$datetime');")){
        $msg = "Cadastro enviado com sucesso!";             
    }else{
        $msg = "Erro ao enviar o cadastro!". $con->error;
    }

    $_SESSION['msg'] = $msg;

header("location:login.php");