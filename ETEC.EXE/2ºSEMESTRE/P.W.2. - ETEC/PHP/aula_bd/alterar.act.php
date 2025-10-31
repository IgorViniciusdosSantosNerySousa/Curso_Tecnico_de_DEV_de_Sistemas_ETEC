<?php require('sec.php')?>
<?php
    extract($_POST);
    extract($_FILES);    
    require('connect.php');
    session_start();
    $msg = "";
    $destino = "";
    if(mysqli_query($con, "UPDATE `tb_clientes` SET 
    `nome` = '$nome', 
    `email` = '$email', 
    `sexo` = '$sexo' 
    WHERE `tb_clientes`.`codigo` = '$codigo';")){
        $msg = "Registro alterado com sucesso!";
        $destino = "alterar.php?cod=$codigo";
        move_uploaded_file($foto['tmp_name'],$dir);
    }else{
        $msg = "Não foi possível alterar os dados.";
        $destino = "alterar.php?cod=$codigo";
    }
    $_SESSION['msg'] = $msg;
    
   

    header("location:$destino");