<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="topo">
        <ul class="menu">
            <br>
            <a href="form.php"><li>Adicionar</li></a>
            <br>
            <a href="listar.php"><li>Usuários</li></a>
            <br>
            <a href="pesquisar.php"><li>Pesquisar</li></a>
            <br>
            <a href="pagina_Inicial.php"><li>Início</li></a>
    <?php 
        @session_start();
        if(isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
            echo "<a href=logoff.php><li>Sair</li></a>";
        }else {
            echo "<a href=login.php><li>Entrar</li></a>";
        }
    
    ?>
        </ul>
    </div>
</body>
</html>
