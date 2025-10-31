<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Do Treinador </title>
    <link rel="stylesheet" href="form.css">
    <script src="jquerys/jquery-3.7.1.js"></script>
    <script src="libs/jQuery-Mask-Plugin-master/src/jquery.mask.js"></script>
</head>
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

    <div class="topo">
        <div class="logo">
        <a href="pagina_Inicial.php">
            <img src="images/pokeball.jpg" alt="Pokeball Logo" title="Voltar à Página Inicial">
        </a>
        </div>
        <h1> Formulário De Treinadores Pokémon </h1>
        <ul class="menu">
            <a href="pagina_Inicial.php">
                <li> Inicio </li>
            </a>
            <a href="pokedex.php">
                <li> Pokédex </li>
            </a>
            <a href="animes.php">
                <li> Animes </li>
            </a>
            <a href="jogos.php">
                <li> Jogos </li>
            </a>
        </ul>
        <div class="burguer">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="form">
        <div>       
        <form>
            <fieldset class="um">
            <br>
                <label for="txtNome">Nome: </label>
                <br>
                <input type="text" name="nome" id="txtNome">
                <br>
                <br>
                <label for="txtNome">Crie um nome de usuário: </label>
                <br>
                <label for="txtNome" class="usuario">*é assim que outros usuários verão você*</label>
                <br>
                <input type="text" name="nameUsu" id="txtNome">            
            <br>
            <br>
                <p>Data de nascimento: </p>
                <input type="date" name="dtNascto" id="">           
            <br>
            <br>
                <p>Telefone: </p>
                <input type="tel" name="telefone" id="txtTelefone">           
            <br>
            <br>          
                <p>E-Mail: </p>
                <input type="txt" name="email" id="">
                <br>
                <br>
                <p>Senha: </p>
                <input type="password" name="senha" id=""> 
            <br>
            <br> 
            <input class="cancel" type="button" value="Cancelar">
            <p><input type="submit" value="Enviar"></p>
            <br>
            <br>
            </fieldset>
        </form>
    </div>
    </div>
    <script src="pokemon.js"></script>
    <script src="form.js"></script>
</body>
</html>
