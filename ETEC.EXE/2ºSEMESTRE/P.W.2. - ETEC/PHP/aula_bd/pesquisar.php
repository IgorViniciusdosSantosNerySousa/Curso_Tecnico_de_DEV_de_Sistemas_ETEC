<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar Clientes</title>
    <script src="libs/jquery-3.7.1.min.js"></script>
</head>
<body>
<?php require('sec.php')?>
    <p>
        <?php 
            @session_start();
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            
        ?>
    </p>
    <?php include('menu.php');?>
    <div class="pesquisar">
        <input type="text" id="txtPesquisa"><input type="button" value="Pesquisar" onclick="pesquisar()">    
    </div>
    <div id="resultados">
    </div>
    <script>
        function pesquisar(){
            texto = document.querySelector('#txtPesquisa').value;
            
            $.ajax({
                type: "get",
                url: "pesquisar.act.php?texto="+texto,
                success: function (response) {
                    $('#resultados').html(response);
                    console.log(texto);
                }
            });
        }
        function excluir(cod){
            resp = confirm("Deseja excluir o Registro?");
            if(resp == true) {
                window.location = "excluir.php?cod="+cod;
            }
        }
    </script>
</body>