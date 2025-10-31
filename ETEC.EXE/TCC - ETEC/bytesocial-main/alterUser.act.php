<?php
    extract($_POST);

    session_start();
    require('connect.php');
    $senha = password_hash($senha, PASSWORD_DEFAULT);
    
    $msg = "";

    if(mysqli_query($con, "INSERT INTO `tb_user` 
            (`idUser`,`userPhoto`,`profileImg`,`vocation`,`bio`) VALUES 
            (NULL,'$userfoto','$profileimg','$vocation','$bio');")){
        $msg = "Alteração Realizada com Sucesso!";             
    }else{
        $msg = "Erro ao Enviar as Alterações!". $con->error;
    }

    $_SESSION['msg'] = $msg;

header("location:profile.php");