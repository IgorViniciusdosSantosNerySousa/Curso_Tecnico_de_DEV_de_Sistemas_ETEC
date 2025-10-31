<?php
    extract($_POST);
    if(unlink("fotos/$src")){
        session_start();
        $_SESSION['msg'] = "Foto excluída com sucesso!";
        $_SESSION['destino'] = "";
    }