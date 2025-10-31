
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" CONTENT="ie=EDGE">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUDAR</title>
    <link rel=stylesheet href="style.css">
</head>
<body>
    <div class="layyout">
    <?php require('sec.php');?>
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
    <form action="addLivro.act.php" method="post" enctype="multipart?form-data" id="form.php">
        <p>EMAIL: <input type="text" name="email" id="lbLEmail"><label for="lblEmail"></label>
    </form>
</div>
    
</body>
</html>
