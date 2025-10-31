<?php
    //var_dump($_POST);
    //$base = $_POST['base'];
    extract($_POST);

echo "Base: $base <hr>Expoente: $expoente";
$potencia = pow($base,$expoente);
$potencia = $base**$expoente
session_start();
$_SESSION['base'] = $base;
$_SESSION['expoente'] = $expoente;
$_SESSION['potencia'] = $potencia;
$destino = "potencia.php";
header("location:$destino");


