<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="excluir.php">
    <title>Document</title>
</head>
<body>
    <form action="upload.act.php" method="post" enctype="multipart/form-data">
        <input type="file" name="foto" id="">
        <input type="submit" value="Enviar" name="bt-enviar">
    </form>
    <?php
        session_start();
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            echo "<img src=$_SESSION[destino] >";
            session_destroy();
        }

        $lista = scandir('fotos/');
        // var_dump($lista);
        echo "<div class=sim>";
        foreach($lista as $fotos){
            echo "<img src=fotos/$fotos onclick=excluir(\"$fotos\")>";
        }
        echo "</div>";
    ?>
    <script>
        function excluir(foto){
            $.ajax({
                type: "post",
                url: "excluir.php",
                data: {src:foto},
                success: function (response) {
                    // $('#mensagem").html(response);
                    location.reload();
                }
            });
        }
    </script>    
</body>
</html>