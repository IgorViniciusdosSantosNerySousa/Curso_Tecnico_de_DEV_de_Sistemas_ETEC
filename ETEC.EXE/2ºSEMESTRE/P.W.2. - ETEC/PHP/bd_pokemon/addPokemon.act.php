
<?php
    session_start();
    extract($_POST);
    extract($_FILES);
    $dir = "fotos/".md5(time()).".jpg";
    require('connect.php');
    $busca = mysqli_query($con, "SELECT * FROM `tb_pokemon` WHERE `nome` = '$nome'");

    if($busca->num_rows == 0){
        if(mysqli_query($con, "INSERT INTO `tb_pokemon`(`codigo`,`nome`,`tipo`, `sexo`, `foto`) 
            VALUES (NULL, '$nome', '$tipo', '$sexo', '$dir');")){
            move_uploaded_file($foto['tmp_name'],$dir);
            $_SESSION['msg'] = "Pokémon adicionado com sucesso!";
        }else{
            $_SESSION['msg'] = "Erro Ao Adicionar este Pokémon!";
        }
    }else{
        $_SESSION['msg'] = "<p>Pokémon já Registrado! Insira um Diferente.</p>";
    }
    header("location:addPokemon.php");
?>

