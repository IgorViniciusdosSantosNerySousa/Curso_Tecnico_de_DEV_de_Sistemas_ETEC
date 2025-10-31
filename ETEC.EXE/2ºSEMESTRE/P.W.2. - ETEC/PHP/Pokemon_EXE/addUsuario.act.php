
<?php
    session_start();
    extract($_POST);
    extract($_FILES);
    require('connect.php');
    $busca = mysqli_query($con, "SELECT * FROM `tb_usu` WHERE `email` = '$email'");

    if($busca->num_rows == 0){
        echo $senha = password_hash($senha,PASSWORD_DEFAULT);
        if(mysqli_query($con, "INSERT INTO `tb_usu`(`id`, `nome`, `nome_usu`, `dataNasc`, `telefone`, `email`, `senha`) 
            VALUES (NULL, '$nome', '$nome_usu', '$dataNasc', '$telefone', '$email', '$senha');")){
            $_SESSION['msg'] = "Registro gravado com sucesso!";
        }else{
            $_SESSION['msg'] = "Erro Ao Registrar!";
        }
    }else{
        $_SESSION['msg'] = "<p>Email já Registrado! Insira um Diferente.</p>";
    }
    header("location:form.php");
?>

