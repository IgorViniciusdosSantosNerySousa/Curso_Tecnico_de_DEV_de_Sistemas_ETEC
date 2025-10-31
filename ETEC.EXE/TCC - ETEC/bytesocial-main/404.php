<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro 404 - Byte</title>
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            overflow-x: hidden;
            overflow-y: hidden;
        }

        body {
            background-image: url(./img/tela_erro.png);
            background-repeat: no-repeat;
            background-size: 100vw 100vh;
        }

        .container {
            width: 100%;
            height: 100vh;

            a {
                width: 360px;
                height: 60px;
                border: none;
                border-radius: 10px;
                background-color: rgb(29, 156, 156);
                color: white;
                position: fixed;
                top: 600px;
                left: 160px;
                text-align: center;
                font-size: 25px;
                font-family: sans-serif;
                padding-top: 17px;
                cursor: pointer;
            }
        }
    </style>
</head>
<body>
    <div class="container">
    <?php 
        @session_start();
        if (isset($_SESSION['user'])) {
            echo '<a class="back" href="./feed.php">Voltar para a Tela Inicial</a>';
        } else {
            echo '<a class="back" href="./landingPage.php">Voltar para a Tela Inicial</a>';
        }
    ?>
    </div>
</body>
</html>