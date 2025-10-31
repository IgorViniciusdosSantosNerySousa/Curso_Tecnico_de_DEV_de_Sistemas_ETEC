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
    <form action="login.act.php" method="post" enctype="multipart/form-data" id="formAddCliente" style="height:200px">
        <p>Email: <input type="text" name="email" id="lblEmail"><label for="lblEmail"></label></p>
        <p>Senha: <input type="password" name="senha" id=""></p>
        <p><input type="submit" value="Entrar"></p>
    </form>
    </div>
</body>