<?php require('sec.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Administrador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="layout">

    <?php include('menu.php');?>
    <p>
        <?php 
            @session_start();
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
    </p>
    <form action="addAdmin.act.php" method="post" enctype="multipart/form-data" id="formAddAdmin">
        <p>NOME: <input type="text" name="nome" id="lblName"><label for="lblName"></label></p>
        <p>EMAIL: <input type="text" name="email" id="lblEmail"><label for="lblEmail"></label></p>
        <p>SENHA: <input type="password" name="senha" id="lblSenha"><label for="lblSenha"></label></p>
        <p><input type="submit" value="Enviar"></p>
    </form>
    </div>
</body>
</html>
