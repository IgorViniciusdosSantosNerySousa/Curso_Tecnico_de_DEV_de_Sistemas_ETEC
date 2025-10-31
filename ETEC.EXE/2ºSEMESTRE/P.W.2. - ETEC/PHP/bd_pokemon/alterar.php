<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Pokemon</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

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
    
    <?php
        $codigo =  $_GET['cod'];
        require('connect.php');
        $busca = mysqli_query($con, "SELECT * FROM `tb_pokemon` WHERE `codigo` = '$codigo';");
        $pokemon = mysqli_fetch_assoc($busca);
    ?>
    <div class="layout2">
    <form action="alterar.act.php" method="post" enctype="multipart/form-data" id="formAddPokemon">
        <input type="hidden" name="codigo" value="<?php echo $pokemon['codigo']; ?>">
        <input type="hidden" name="foto" value="<?php echo $pokemon['foto']; ?>">
        <p>NOME DO POKÉMON: <input type="text" name="nome" id="" value="<?php echo $pokemon['nome'];?>"></p>
        <p>TIPO: </p>
        <p><input type="radio" name="tipo" value="0" id="lblFogo" <?php if($pokemon['tipo'] == "Fogo"){echo "checked";}; ?>>
        <label for="lblFogo"></label>Fogo</p>
        <p><input type="radio" name="tipo" value="1" id="lblAgua" <?php if($pokemon['tipo'] == "Água"){echo "checked";}; ?>>
        <label for="lblAgua"></label>Água</p>
        <p><input type="radio" name="tipo" value="2" id="lblGra" <?php if($pokemon['tipo'] == "Planta"){echo "checked";}; ?>>
        <label for="lblGra"></label>Planta</p>
        <p><input type="radio" name="tipo" value="3" id="lblNor" <?php if($pokemon['tipo'] == "Normal"){echo "checked";}; ?>>
        <label for="lblNor"></label>Normal</p>
        <p><input type="radio" name="tipo" value="4" id="lblPsi" <?php if($pokemon['tipo'] == "Psíquico"){echo "checked";}; ?>>
        <label for="lblPsi"></label>Psíquico</p>
        <p><input type="radio" name="tipo" value="5" id="lblFly" <?php if($pokemon['tipo'] == "Voador"){echo "checked";}; ?>>
        <label for="lblFly"></label>Voador</p>
        <p><input type="radio" name="tipo" value="6" id="lblFan" <?php if($pokemon['tipo'] == "Fantasma"){echo "checked";}; ?>>
        <label for="lblFan"></label>Fantasma</p>
        <p><input type="radio" name="tipo" value="7" id="lblVen" <?php if($pokemon['tipo'] == "Veneno"){echo "checked";}; ?>>
        <label for="lblVen"></label>Veneno</p>
        <p><input type="radio" name="tipo" value="8" id="lblBug" <?php if($pokemon['tipo'] == "Inseto"){echo "checked";}; ?>>
        <label for="lblBug"></label>Inseto</p>
        <p><input type="radio" name="tipo" value="9" id="lblElet" <?php if($pokemon['tipo'] == "Elétrico"){echo "checked";}; ?>>
        <label for="lblElet"></label>Elétrico</p>
        <p><input type="radio" name="tipo" value="10" id="lblPed" <?php if($pokemon['tipo'] == "Pedra"){echo "checked";}; ?>>
        <label for="lblPed"></label>Pedra</p>
        <p><input type="radio" name="tipo" value="11" id="lblGro" <?php if($pokemon['tipo'] == "Terra"){echo "checked";}; ?>>
        <label for="lblGro"></label>Terra</p>
        <p><input type="radio" name="tipo" value="12" id="lblIce" <?php if($pokemon['tipo'] == "Gelo"){echo "checked";}; ?>>
        <label for="lblIce"></label>Gelo</p>
        <p><input type="radio" name="tipo" value="13" id="lblLut" <?php if($pokemon['tipo'] == "Lutador"){echo "checked";}; ?>>
        <label for="lblLut"></label>Lutador</p>
        <p>SEXO: </p>
        <p><input type="radio" name="sexo" value="0" id="lblMac" <?php if($pokemon['sexo'] == "Macho"){echo "checked";}; ?>>
        <label for="lblMac"></label>Macho</p>
        <p><input type="radio" name="sexo" value="1" id="lblFem" <?php if($pokemon['sexo'] == "Fêmea"){echo "checked";}; ?>><label for="lblFem"></label>Fêmea</p>
        <p><input type="radio" name="sexo" value="2" id="lblNeu" <?php if($pokemon['sexo'] == "Nêutro"){echo "checked";}; ?>><label for="lblNeu"></label>Nêutro</p>
        <p><input type="file" name="foto" id="txtFoto1"><label for="txtFoto1"></label></p>
        <p><input type="submit" value="Enviar"></p>
    </form>
    </div>

</body>
</html>
