<?php require('sec.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Pokemon</title>
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
    <form action="addPokemon.act.php" method="post" enctype="multipart/form-data" id="formAddPokemon">
        <p>NOME DO POKÉMON: <input type="text" name="nome" id="lblName"><label for="lblName"></label></p>
        <p>TIPO: </p>
        <p><input type="radio" name="tipo" value="0" id="lblFogo"><label for="lblFogo"></label>Fogo</p>
        <p><input type="radio" name="tipo" value="1" id="lblAgua"><label for="lblAgua"></label>Água</p>
        <p><input type="radio" name="tipo" value="2" id="lblGra"><label for="lblGra"></label>Planta</p>
        <p><input type="radio" name="tipo" value="3" id="lblNor"><label for="lblNor"></label>Normal</p>
        <p><input type="radio" name="tipo" value="4" id="lblPsi"><label for="lblPsi"></label>Psíquico</p>
        <p><input type="radio" name="tipo" value="5" id="lblFly"><label for="lblFly"></label>Voador</p>
        <p><input type="radio" name="tipo" value="6" id="lblFan"><label for="lblFan"></label>Fantasma</p>
        <p><input type="radio" name="tipo" value="7" id="lblVen"><label for="lblVen"></label>Veneno</p>
        <p><input type="radio" name="tipo" value="8" id="lblBug"><label for="lblBug"></label>Inseto</p>
        <p><input type="radio" name="tipo" value="9" id="lblElet"><label for="lblElet"></label>Elétrico</p>
        <p><input type="radio" name="tipo" value="10" id="lblPed"><label for="lblPed"></label>Pedra</p>
        <p><input type="radio" name="tipo" value="11" id="lblGro"><label for="lblGro"></label>Terra</p>
        <p><input type="radio" name="tipo" value="12" id="lblIce"><label for="lblIce"></label>Gelo</p>
        <p><input type="radio" name="tipo" value="13" id="lblLut"><label for="lblLut"></label>Lutador</p>
        <p>SEXO: </p>
        <p><input type="radio" name="sexo" value="Macho" id="lblMasc"><label for="lblMac"></label>Macho</p>
        <p><input type="radio" name="sexo" value="Fêmea" id="lblFem"><label for="lblFem"></label>Fêmea</p>
        <p><input type="radio" name="sexo" value="Nêutro" id="lblNet"><label for="lblNet"></label>Nêutro</p>
        <p><input type="file" name="foto" id="txtFoto1"><label for="txtFoto1"></label></p>
        <p><input type="submit" value="Enviar"></p>
    </form>
    </div>
</body>
</html>
