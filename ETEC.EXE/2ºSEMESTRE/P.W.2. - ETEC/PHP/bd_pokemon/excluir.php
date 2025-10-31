<?php
    extract($_GET);
    require('connect.php');
    session_start();

    $busca = mysqli_query($con, "SELECT `foto` FROM `tb_pokemon` WHERE `codigo` = '$cod'");
    $foto = mysqli_fetch_assoc($busca);
    unlink($foto['foto']);
    if(mysqli_query($con, "DELETE FROM `tb_pokemon` WHERE `codigo` = '$cod'")) {
        $msg = "Pokémon Excluído com Sucesso!!!";
    }else {
        $msg = "Erro ao Excluir este Pokémon. Tente Novamente!";
    }
    
    $_SESSION['msg'] = $msg;

    header("location:listar.php");
