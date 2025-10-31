<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Animes Pokémon - 1º Geração</title>
    <script src="jquerys/jquery-3.7.1.js"></script>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="animes.css">
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
        <h1> Animes Pokémon - 1º Geração </h1>
        <ul class="menu">
            <a href="pagina_Inicial.php">
                <li> Inicio </li>
            </a>
            <a href="pokedex.php">
                <li> Pokédex </li>
            </a>
            <a href="">
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
    <div class="anime">
        <div>
            <h1> Como surgiu os Animes de Pokémon? </h1>
            <br>
            <img src="" alt="">
            <br>
            <p> Com mais de mil episódios, o anime Pokémon já contou inúmeras histórias ao longo dos anos. As aventuras
                de Ash e seu companheiro Pikachu se direcionam sempre para o objetivo principal do treinador, que é se
                tornar um Mestre Pokémon.
                <br><br>
                O auge dos jogos Pokémon Red e Pokémon Green, lançados no ano de 1996 no Japão, não demorou muito
                para que sua versão animada fosse lançada e aumentada ainda mais a febre da franquia dos monstrinhos de
                bolso pelo mundo.
                <br><br>
                Estreado em 1997, a série de anime Pocket Monsters (ou Pokémon: A Série, no ocidente) atualmente conta
                com mais de mil episódios divididos em 23 temporadas e 7 séries principais: Pokémon, Geração Avançada,
                Diamante e Pérola, Preto e Branco (Best Whishes, no Japão), XY, Sol e Lua, e Jornadas (chamada
                simplesmente de Pocket Monsters, no Japão). Durante todos esses anos a história segue o garoto de 10
                anos, Ash Ketchum, e seu parceiro Pikachu na sua jornada para se tornar um Mestre Pokémon. </p>
            <br>
            <img src="" alt="">
        </div>
        <div>
            <h1> Pokémon indigo League </h1>
            <img src="images/indigo_league.jpg" alt="">
            <br><br>
            <p> Nascido e criado na cidade de Pallet, em Kanto, Ash vive com sua mãe e, ao completar 10 anos de idade,
                finalmente ganha a oportunidade de pode escolher seu Pokémon inicial no laboratório do Professor
                Carvalho para dar início ao seu sonho pelo título de Mestre Pokémon. No entanto, devido ao seu
                entusiasmo na noite anterior que não o permitiu dormir, o garoto se atrasa para o seu grande dia e perde
                a chance de escolher entre os três Pokémon iniciais de Kanto: Bulbasaur, Squirtle ou Charmander. A
                sorte, contudo, é que o Professor tinha capturado um Pikachu um tanto quanto rebelde que se junta a Ash
                e, juntos, iniciam sua longa aventura.
                <br><br>
                Porém, em toda aventura sempre haverá aqueles que estarão no caminho do herói para impedir seu grande
                objetivo. A Equipe Rocket é uma organização maligna liderada pelo misterioso Giovanni que planeja a
                dominação mundial através do roubo de todos os Pokémon. Ash e Pikachu sempre acabam impedindo os planos
                da Equipe Rocket, especialmente de três recrutas que não perdem a oportunidade de roubar seu Pokémon
                Elétrico, sendo eles: a esquentada Jessie, o sensível James, e o Pokémon falante que anda sobre duas
                patas Meowth.
                <br><br>
                A aventura de Ash e Pikachu pelas regiões do mundo Pokémon é compartilhada com amigos que ele faz pelo
                caminho: inicialmente, Ash é acompanhado por Misty, a líder de ginásio de Cerulean do tipo Água, e
                Brock, o líder de ginásio do tipo Pedra de Pewter e Criador Pokémon.</p>


            <h1> Ilhas Lanranja </h1>
            <img src="images/ilhas_laranja.jpg" alt="">
            <br><br>
            <p> Com sua jornada em Kanto completa, Ash descobre que ainda há muito o que se ver e fazer quando o
                Professor Carvalho manda ele e seus amigos para as Ilhas Laranja. Brock se apaixona pela atraente
                professora Ivy e decide ficar com ela, deixando Ash e Misty sozinhos, ao menos até eles conhecerem o
                Observador Pokémon, Tracey Sketchit! Nessa jornada, Ash e seus amigos encontram novos pokémon, novos
                desafios, novas conquistas, além de muita diversão e aventura!
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