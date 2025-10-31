<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Cliente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="layout">
    <?php require('sec.php')?>
    <?php include('menu.php'); ?>
    <p>
        <?php 
            @session_start();
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
    </p>
    <form action="addCliente.act.php" method="post" enctype="multipart/form-data" id="formAddCliente">
        <p>Nome: <input type="text" name="nome" id="lblName"><label for="lblName"></label></p>
        <p>Email: <input type="text" name="email" id="lblEmail"><label for="lblEmail"></label></p>
        <p>Sexo: </p>
        <p><input type="radio" name="sexo" value="0" id="lblMasc"><label for="lblMasc"></label>Masculino</p>
        <p><input type="radio" name="sexo" value="1" id="lblFem"><label for="lblFem"></label>Feminino</p>
        <p><input type="radio" name="sexo" value="2" id="lblOut"><label for="lblOut"></label>Outro</p>
        <p><input type="radio" name="sexo" value="3" id="lblPND"><label for="lblPND"></label>Prefiro Não Identificar</p>
        <p><input type="radio" name="sexo" value="4" id="lblCro"><label for="lblCro"></label>Croissant</p>
        <p>Senha: <input type="password" name="senha" id="lblPsw"><label for="lblPsw"></label></p>
        <p><input type="file" name="foto" id="txtFoto"><label for="txtFoto">Selecionar Foto</label></p>
        <p><input type="submit" value="Enviar"></p>
    </form>
    </div>
</body>
</html>
