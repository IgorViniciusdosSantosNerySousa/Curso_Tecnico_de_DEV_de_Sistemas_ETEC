<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="potencia.act.php" method="post">
        <p>Base: <input type="text" name="base" id=""></p>
        <p>Expoente: <input type="text" name="expoente" id=""></p>
        <p><input type="submit" name="bt-enviar" value="Enviar"></p>
        
    </form>
    <?php
    session_start();
    if(isset($_SESSION['base'])){
        echo "$_SESSION[base] elevado a $_SESSION[expoente] é igual a $_SESSION[potencia]";
    }
    ?>
</body>
</html>