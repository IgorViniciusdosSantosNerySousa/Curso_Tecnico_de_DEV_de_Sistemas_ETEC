<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Jogos Pokémon! </title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="jogos.css">

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
        <h1> Jogos Pokémon! </h1>
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
            <a href="">
                <li> Jogos </li>
            </a>
        </ul>
        <div class="burguer">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <div class="jogos">
        <div>
            <h1> Red, Blue/Green </h1>
            <img src="images/red_blue_green.jpg" alt="">
            <p> Os primeiros jogos de Pokémon são: Pokémon Red, Blue e Green. Foram criados
                para o Game Boy. Eles representam a Geração I da franquia. No Japão, as primeiras versões
                lançadas foram Red e Green. Quando chegaram ao ocidente, a versão Blue substituiu a
                Green devido aos gráficos melhores. Esses jogos são de RPG, onde você é um treinador de Pokémon.
                Você começa com um Pokémon inicial, recebe uma Pokédex e parte em uma jornada para derrotar vilões,
                ganhar insígnias de ginásio e se tornar um mestre Pokémon. Durante a jornada, você encontra vários
                Pokémon e enfrenta treinadores, incluindo seu rival. </p>
        </div>
        <div>
            <h1>Yellow</h1>
            <img src="images/yellow.jpg" alt="">
            <p>Pokémon Yellow: Special Pikachu Edition, mais conhecido como Pokémon Yellow Version é um jogo eletrônico
                de RPG de 1998, desenvolvido pela Game Freak e publicado pela Nintendo para o Game Boy Color. É uma
                versão aprimorada do Pokémon Red e Blue e faz parte da primeira geração da série de jogos eletrônicos
                Pokémon. O jogo segue a mesma a história dos anteriores, mas com algumas mudanças, como por exemplo o
                pokémon inicial, no qual ao invés de escolher entre Bulbasaur, Charmander e Squirtle, o jogador começa
                com um Pikachu que irá segui-lo fora da pokebola. Durante o jogo, também é possível obter os 3 iniciais
                através de npc's em Cerulean.</p>
        </div>
        <div>
            <h1> Fire Red/Leaf Green </h1>
            <img src="images/fire_red_leaf_green.jpg" alt="">
            <p>Pokémon FireRed Version e Pokémon LeafGreen Version são dois jogos eletrônicos de RPG de 2004 recriado
                pelo Pokémon Red e Blue de Game Boy em 1996. Eles foram desenvolvidos pela Game Freak e publicados pela
                The Pokémon Company e pela Nintendo para o Game Boy Advance. Os jogos seguem a mesma história dos
                originais, com algumas atualizações, um pós-game e pokémons até a 3ª Geração da série.</p>
        </div>
        <div>
            <h1> Let's Go Eevee/Pikachu </h1>
            <img src="images/letsgopikachu_eevee.jpg" alt="">
            <p>Pokémon Let's Go, Pikachu! e Let's Go, Eevee! são um par de jogos eletrônicos de RPG de 2018, recriações
                de Pokémon Yellow do Game Boy Color de 1998. Eles eram desenvolvidos pela Game Freak e distribuídos pela
                Nintendo e pela The Pokémon Company para Nintendo Switch. Anunciado em maio de 2018, Let's Go, Pikachu!
                e Let's Go, Eevee! foram lançados mundialmente para o Nintendo Switch em 16 de novembro de 2018. A
                história dos jogos segue a mesma linha do Pokémon yellow, o jogador começa com o pokémon de sua
                respectiva versão (Eevee ou Pikachu), podendo ter a possibilidade de conseguir os 3 iniciais da primeira
                geração. O sistema de pokémon selvagem também mudou, com os pokémon aparecendo no mapa, diferente dos
                jogos tradicionais que os pokémon apareciam quando o jogador andava pelo mapa.
            </p>
        </div>
    </div>
    <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <img src="images/pokeball.jpg" alt="">
                <p> Já pensou em se tornar um treinador pokémon? <a href="form.html">Clique Aqui!</a></p>

                <div id="footer_social_media">
                    <a href="https://www.instagram.com/pokemon/" class="footer-link" id="instagram1">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com/Pokemon/" class="footer-link" id="facebook">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="whatsapp.html" class="footer-link" id="whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            <ul class="footer-list">
                <li>
                    <h3>Saiba Mais sobre: </h3>
                </li>
                <li>
                    <a href="https://www.pokemon.com/br/dibujos-animados" class="footer-link"> Animes Pokémon</a>
                </li>
                <li>
                    <a href="https://pt.moyens.net/jogos/todos-os-jogos-pokemon-em-ordem-cronologicamente-e-por-data-de-lancamento/#:~:text=Pok%C3%A9mon%20Vermelho%2C%20Azul%2C%20Verde%20e%20Amarelo%20%281998-1999%29%20Pok%C3%A9mon,%282011%29%20Pok%C3%A9mon%20Preto%202%20e%20Branco%202%20%282012%29"
                        class="footer-link"> Jogos Pokémon</a>
                </li>
                <li>
                    <a href="https://www.pokemon.com/br/pokedex" class="footer-link"> Pokédex Completa</a>
                </li>
            </ul>
            <div id="footer_subscribe">
                <h3>Fique informado para não perder nenhuma notificação! </h3>
                <p> Insira seu E-Mail aqui.</p>
                <div id="input_group">
                    <input type="email" id="email">
                    <button>
                        <i class="fa-regular fa-envelope"></i>
                    </button>
                </div>
            </div>
        </div>
        <div id="footer_copyright">
            &#169
            2024 All Rights Reserved
        </div>
    </footer>
    <script src="pokemon.js"></script>

</body>

</html>