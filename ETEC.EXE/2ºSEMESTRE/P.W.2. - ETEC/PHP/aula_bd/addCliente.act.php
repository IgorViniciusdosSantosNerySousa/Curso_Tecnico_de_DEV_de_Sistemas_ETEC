<?php require('sec.php')?>
<?php
    session_start();
    extract($_POST);
    extract($_FILES);
    $dir = "fotos/".md5(time()).".jpg";
    require('connect.php');
    $busca = mysqli_query($con, "SELECT * FROM `tb_clientes` WHERE `email` = '$email'");

    if($busca->num_rows == 0){
        echo $senha = password_hash($senha,PASSWORD_DEFAULT);
        if(mysqli_query($con, "INSERT INTO `tb_clientes`(`codigo`, `nome`, `email`, `foto`, `sexo`, `senha`) 
            VALUES (NULL, '$nome', '$email', '$dir', '$sexo', '$senha');")){
            move_uploaded_file($foto['tmp_name'],$dir);
            $_SESSION['msg'] = "Registro gravado com sucesso!";
        }else{
            $_SESSION['msg'] = "Erro Ao Registrar!";
        }
    }else{
        $_SESSION['msg'] = "<p>Email já Registrado! Insira um Diferente.</p>";
    }
    header("location:addCliente.php");
?>

