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
    $pokemons = mysqli_query($con, "SELECT * FROM `tb_pokemon`");
    
    echo "<div class=cards>";
    while($pokemon = mysqli_fetch_assoc($pokemons)){
        echo "<div>";
        echo "<img src=$pokemon[foto]>";
        echo "<p>Nome: $pokemon[nome]</p>";
        switch ($pokemon['tipo']) {
            case '0':
                $imprimirTipo = "Fogo";
                break;
            case '1':
                $imprimirTipo = "Água";
                break;
            case '2':
                $imprimirTipo = "Planta";
                break;
            case '3':
                $imprimirTipo = "Normal";
                break;
            case '4':
                $imprimirTipo = "Psíquico";
                break;
            case '5':
                $imprimirTipo = "Voador";
                break;
            case '6':
                $imprimirTipo = "Fantasma";
                break;
            case '7':
                $imprimirTipo = "Venenoso";
                break;
            case '8':
                $imprimirTipo = "Inseto";
                break;
            case '9':
                $imprimirTipo = "Elétrico";
                break;
            case '10':
                $imprimirTipo = "Pedra";
                break;
            case '11':
                $imprimirTipo = "Terra";
                break;
            case '12':
                $imprimirTipo = "Gelo";
                break;
            case '13':
                $imprimirTipo = "Lutador";
                break;
            default:
                echo "<p> Tipo não encontrado ou não foi específicado, por favor verifique se todas as informações foram inseridas corretamente. </p>";
                break;
        }
        echo "<p>Tipo: $imprimirTipo</p>";
        switch ($pokemon['sexo']) {
            case '0':
                $imprimirSexo = "Macho";
                break;
            case '1':
                $imprimirSexo = "Fêmea";
                break;
            case '2':
                $imprimirSexo = "Nêutro";
                break;    
            default:
            echo "<p> Sexo não encontrado ou não foi específicado, por favor verifique se todas as informações foram inseridas corretamente. </p>";
                break;
        }
        echo "<p>Sexo: $imprimirSexo</p>";
        echo "<p><a href=alterar.php?cod=$pokemon[codigo]>ALTERAR</a></p>";
        echo "<p><a href=javascript:excluir($pokemon[codigo])>EXCLUIR</a></p>";
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
