
<?php
    session_start();
    extract($_POST);
    extract($_FILES);
    $dir = "fotos/".md5(time()).".jpg";
    require('connect.php');
    $busca = mysqli_query($con, "SELECT * FROM `tb_adm` WHERE `nome` = '$nome'");

    if($busca->num_rows == 0){
        $senha = password_hash($senha,PASSWORD_DEFAULT);
        if(mysqli_query($con, "INSERT INTO `tb_adm`(`codigo`,`nome`,`email`, `senha`) 
            VALUES (NULL, '$nome','$email', '$senha');")){
            move_uploaded_file($foto['tmp_name'],$dir);
            $_SESSION['msg'] = "Administrador cadastrado com sucesso!";
        }else{
            $_SESSION['msg'] = "Erro Ao Cadastrar este Administrador!";
        }
    }else{
        $_SESSION['msg'] = "<p>Administrador já Registrado! Insira um Diferente.</p>";
    }
    header("location:addAdmin.php");
?>

