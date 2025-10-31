<?php require('sec.php')?>
<?php
    extract($_POST);
    extract($_FILES);    
    require('connect.php');
    @session_start();
    $dir = "fotos/".md5(time()).".jpg";
    $msg = "";
    $destino = "";
    if(mysqli_query($con, "UPDATE `tb_pokemon` SET 
    `foto` = '$dir',
    `nome` = '$nome',
    `tipo` = '$tipo',
    `sexo` = '$sexo' 
    WHERE `tb_pokemon`.`codigo` = '$codigo';")){
        move_uploaded_file($foto['tmp_name'],$dir);
        $msg = "Registro alterado com sucesso!";
        $destino = "alterar.php?cod=$codigo"; 
    }else{
        $msg = "Não foi possível alterar os dados.";
        $destino = "alterar.php?cod=$codigo";
    }
    $_SESSION['msg'] = $msg;
    
    header("location:$destino");