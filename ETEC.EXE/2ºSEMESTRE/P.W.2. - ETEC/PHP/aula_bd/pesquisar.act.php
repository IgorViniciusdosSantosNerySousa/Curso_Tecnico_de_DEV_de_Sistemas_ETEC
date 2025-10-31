<?php require('sec.php')?>

<?php

require('connect.php');
extract($_GET);

    $clientes = mysqli_query($con, "SELECT * FROM `tb_clientes` WHERE `nome` LIKE '%$texto%'");

    echo "<div class=cards>";
    while($cliente = mysqli_fetch_assoc($clientes)){
        echo "<div>";
        echo "<img src=$cliente[foto]>";
        echo "<p>Código: $cliente[codigo]</p>";
        echo "<p>Nome: $cliente[nome]</p>";
        echo "<p>Email: $cliente[email]</p>";
        echo "<p><a href=alterar.php?cod=$cliente[codigo]>ALTERAR</a></p>";
        echo "<p><a href=javascript:excluir($cliente[codigo])>EXCLUIR</a></p>";
        echo "</div>";
    }   
    echo "</div>";
?>