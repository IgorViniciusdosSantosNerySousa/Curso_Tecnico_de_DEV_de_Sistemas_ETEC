<?php
    session_start();
    extract($_SESSION);
    extract($_POST);
    $_SESSION['tentativas']++;
   
    if($palpite < $numero){
        $msg="Palpite um Número Maior.";
    }else if($palpite > $numero){
        $msg = "Palpite um Número Menor.";
    }else {
        $msg = "Parabéns!! Você acertou o Número $numero!";
        $numero = rand(1,100);
        $_SESSION['numero'] = $numero;
        $_SESSION['tentativas'] = 0;
    }
    
    $_SESSION['msg'] = $msg;
    header("location:jogo.php");