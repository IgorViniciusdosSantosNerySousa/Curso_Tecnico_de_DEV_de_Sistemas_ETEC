<?php require('sec.php')?>

<?php

require('connect.php');
extract($_GET);

    $pokemons = mysqli_query($con, "SELECT * FROM `tb_pokemon` WHERE `nome` LIKE '%$texto%'");

    echo "<div class=cards>";
    while($pokemon = mysqli_fetch_assoc($pokemons)){
        echo "<div>";
        echo "<img src=$pokemon[foto]>";
        echo "<p>Nome: $pokemon[nome]</p>";
        echo "<p>Tipo: $pokemon[tipo]</p>";
        echo "<p>Sexo: $pokemon[sexo]</p>";
        echo "<p><a href=alterar.php?cod=$pokemon[codigo]>ALTERAR</a></p>";
        echo "<p><a href=javascript:excluir($pokemon[codigo])>EXCLUIR</a></p>";
        echo "</div>";
    }   
    echo "</div>";
?>