<?php
        session_start();
        extract($_POST);
        require('connect1.php');
        if(mysqli_query($con, "INSERT INTO `tb_carros` (`codigo`, `nome`, `marca`, `ano`) VALUES (NULL, 
                    '$nome', '$marca', '$ano');")) {
            $_SESSION['msg'] = "Registro gravado com sucesso!";
        }
    
        header("localhost:addCarro.php");
?>