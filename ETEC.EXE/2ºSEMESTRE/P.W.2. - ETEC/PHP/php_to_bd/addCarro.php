<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Carro</title>
</head>
<body>
    <p>
        <?php
            session_start();
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
    </p>
    <form action="addCarro.act.php" method="post">
        <p>Nome: <input type="text" name="nome" id=""></p>
        <p>Marca: <input type="text" name="marca" id=""></p>
        <p>Ano: <input type="date" name="ano" id=""></p>
        <p><input type="submit" value="Enviar"></p>
    </form>
</body>
</html>