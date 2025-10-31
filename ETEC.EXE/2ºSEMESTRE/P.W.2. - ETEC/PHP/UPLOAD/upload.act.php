<?php
    extract($_FILES);
    $destino = "fotos/".md5(time().$foto['size']).".jpg";
    move_uploaded_file($foto['tmp_name'],$destino);
    session_start();
    $_SESSION['msg'] = "<p>Arquivo enviado com sucesso!</p>";
    $_SESSION['destino'] = $destino;

    header("location:upload.php");
