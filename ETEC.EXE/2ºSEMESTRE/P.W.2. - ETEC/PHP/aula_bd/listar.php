<?php require('sec.php')?>

<body>
<p>
        <?php 
            @session_start();
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
    </p>
    <?php include('menu.php');
    require('connect.php');
    $clientes = mysqli_query($con, "SELECT * FROM `tb_clientes`");
    
    echo "<div class=cards>";
    while($cliente = mysqli_fetch_assoc($clientes)){
        echo "<div>";
        echo "<img src=$cliente[foto]>";
        echo "<p>Código: $cliente[codigo]</p>";
        echo "<p>Nome: $cliente[nome]</p>";
        echo "<p>Email: $cliente[email]</p>";
        echo "<p><a href=alterar.php?cod=$cliente[codigo]>Alterar</a></p>";
        echo "<p><a href=javascript:excluir($cliente[codigo])>EXCLUIR</a></p>";
        echo "</div>";
    }
    echo "</div>";
    
    ?>

    <script>
        function excluir(cod){
            resp = confirm("Deseja excluir o Registro?");
            if(resp == true) {
                window.location = "excluir.php?cod="+cod;
            }
        }
    </script>
</body>
