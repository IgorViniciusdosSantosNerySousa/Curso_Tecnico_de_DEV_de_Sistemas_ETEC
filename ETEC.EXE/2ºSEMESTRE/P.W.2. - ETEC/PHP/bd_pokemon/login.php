<body>
    <div class="layout">
     
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
    <form action="login.act.php" method="post" enctype="multipart/form-data" id="formAddPokemon" style="height:200px">
        <p>E-MAIL: <input type="text" name="email" id="lblEmail"><label for="lblEmail"></label></p>
        <p>SENHA: <input type="password" name="senha" id=""></p>
        <p><input type="submit" value="Entrar"></p>
    </form>
    </div>
</body>