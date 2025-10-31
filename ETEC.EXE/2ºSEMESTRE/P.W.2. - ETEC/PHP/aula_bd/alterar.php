<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cliente</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php require('sec.php')?>
    <?php include('menu.php'); ?>
    <p>
        <?php 
            session_start();
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
    </p>
    
    <?php
        $codigo =  $_GET['cod'];
        require('connect.php');
        $busca = mysqli_query($con, "SELECT * FROM `tb_clientes` WHERE `codigo` = '$codigo';");
        $cliente = mysqli_fetch_assoc($busca);
    ?>
    <div class="layout2">
    <form action="alterar.act.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="codigo" value="<?php echo $cliente['codigo']; ?>">
        <input type="hidden" name="foto" value="<?php echo $cliente['foto']; ?>">
        <p>Nome: <input type="text" name="nome" id="" value="<?php echo $cliente['nome'];?>"></p>
        <p>Email: <input type="text" name="email" id="" value="<?php echo $cliente['email'];?>"></p>
        <p>Sexo: </p>
        <p><input type="radio" name="sexo" value="0" id="lblMasc" <?php if($cliente['sexo'] == 0){echo "checked";}; ?>>
        <label for="lblMasc"></label>Masculino</p>
        <p><input type="radio" name="sexo" value="1" id="lblFem" <?php if($cliente['sexo'] == 1){echo "checked";}; ?>><label for="lblFem"></label>Feminino</p>
        <p><input type="radio" name="sexo" value="2" id="lblOut" <?php if($cliente['sexo'] == 2){echo "checked";}; ?>><label for="lblOut"></label>Outro</p>
        <p><input type="radio" name="sexo" value="3" id="lblPND" <?php if($cliente['sexo'] == 3){echo "checked";}; ?>><label for="lblPND"></label>Prefiro Não Identificar</p>
        <p><input type="radio" name="sexo" value="4" id="lblCro" <?php if($cliente['sexo'] == 4){echo "checked";}; ?>><label for="lblCro"></label>Croissant</p>
        <p>Senha: <input type="password" name="senha" id="lblPsw"><label for="lblPsw"></label></p>
        <p><input type="file" name="foto" id="txtFoto"><label for="txtFoto">Selecionar Foto</label></p>
        <p><input type="submit" value="Enviar"></p>
    </form>
    </div>

</body>
</html>
