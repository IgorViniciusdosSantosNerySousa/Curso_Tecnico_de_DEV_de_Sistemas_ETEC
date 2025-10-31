<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  <link rel="stylesheet" href="pokedex.css">
  <title>Pokédex | Conheça todos os pokémon!</title>
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
    <h1>Pokédex - Conheça cada pokémon!</h1>
    <ul class="menu">
      <a href="pagina_Inicial.php">
        <li> Inicio </li>
      </a>
      <a href="">
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
  <div class="pokedex">
    <div>
      <h1>O que é uma Pokédex?</h1>
      <img src="images/pokedex.jpg" alt="pokedex">
      <p>A pokédex ou poké-agenda, é um dispositivo tecnológico do mundo pokémon. Com ela, é possível registrar e ver os
        dados de todos os pokémon do mundo. No anime também é usada como a identidade de um treinador pokémon.</p>
    </div>
    <div>
      <h1>001 - Bulbasaur</h1>
      <img src="images/bulbassauto.png" alt="bulbasaur">
      <p>Por algum tempo após seu nascimento, ele utiliza os nutrientes que estão contidos na semente em seu dorso para
        crescer. Ele carrega uma semente nas costas desde o nascimento. À medida que seu corpo cresce, a semente também
        cresce.</p>
    </div>
    <div>
      <h1>002 - Ivysaur</h1>
      <img src="images/ivysaur.png" alt="ivysaur">
      <p>Quanto mais luz solar Ivysaur toma banho, mais força surge dentro dele, permitindo que o botão em suas costas
        cresça. O bulbo nas costas cresce à medida que absorve nutrientes. O bulbo exala um aroma agradável quando
        floresce.</p>
    </div>
    <div>
      <h1>003 - Venusaur</h1>
      <img src="images/venusaur.png" alt="venusaur">
      <p>Enquanto se aquece ao sol, pode converter a luz em energia. Como resultado, é mais potente no verão. Ao
        espalhar as largas pétalas de sua flor e captar os raios do sol, ela enche seu corpo de poder.</p>
    </div>
    <div>
      <h1>004 - Charmander</h1>
      <img src="images/charmander.png" alt="charmander">
      <p>A chama em sua cauda mostra a força de sua força vital. Se Charmander estiver fraco, a chama também queimará
        fracamente. Se Charmander estiver saudável, a chama na ponta de sua cauda queimará vigorosamente e não se
        apagará mesmo que fique um pouco molhada.</p>
    </div>
    <div>
      <h1>005 - Charmeleon</h1>
      <img src="images/charmeleon - Copiar.png" alt="charmeleon">
      <p>Quando ele balança sua cauda em chamas, a temperatura ao seu redor aumenta cada vez mais, atormentando seus
        oponentes. É muito impetuoso por natureza, por isso procura constantemente oponentes para lutar. A sua agressão
        não será reprimida se não vencer.</p>
    </div>
    <div>
      <h1>006 - Charizard</h1>
      <img src="images/charizard - Copiar.png" alt="charizard">
      <p>Se Charizard ficar realmente irritado, a chama na ponta de sua cauda queima em um tom azul claro. Ele usa suas
        asas para voar alto. Quanto mais experiência ele ganha em batalha, maior será a temperatura em que suas chamas
        queimam.</p>
    </div>
    <div>
      <h1>007 - Squirtle</h1>
      <img src="images/squirtle.png" alt="squirtle">
      <p>Após o nascimento, suas costas incha e endurece formando uma concha. Ele espalha uma espuma potente pela boca.
        Sua casca fica macia imediatamente após o nascimento. Em pouco tempo, a casca se torna tão resistente que um
        dedo cutucado ricocheteia nela.</p>
    </div>
    <div>
      <h1>008 - Wartortle</h1>
      <img src="images/wartortle.png" alt="wartortle">
      <p>A cauda longa e peluda de Wartortle é um símbolo de longevidade, por isso este Pokémon é bastante popular entre
        os idosos. Muitas vezes se esconde na água para perseguir presas incautas. Ao nadar rapidamente, ele move as
        orelhas para manter o equilíbrio.</p>
    </div>
    <div>
      <h1>009 - Blastoise</h1>
      <img src="images/blastoise - Copiar.png" alt="blastoise">
      <p>Ele aumenta deliberadamente o peso do corpo para poder suportar o recuo dos jatos de água que dispara. Possui
        bicos de jato em sua concha. Este Pokémon impressionante usa esses jatos para atacar os inimigos com toda a
        força de um foguete.</p>
    </div>
    <div>
      <h1>010 - Caterpie</h1>
      <img src="images/caterpie.png" alt="caterpie">
      <p>Para proteção, ele libera um fedor horrível da antena em sua cabeça para afastar os inimigos. Seus pés curtos
        possuem ventosas nas pontas que lhe permitem escalar encostas e paredes incansavelmente.</p>
    </div>
    <div>
      <h1>011 - Metapod</h1>
      <img src="images/metapod.png" alt="metapod">
      <p>Está esperando o momento de evoluir. Nesta fase, ele só pode endurecer, por isso permanece imóvel para evitar
        ataques. Embora esteja envolto em uma concha resistente, o corpo por dentro é macio. Não pode resistir a um
        ataque severo.</p>
    </div>
    <div>
      <h1>012 - Butterfree</h1>
      <img src="images/butterfree.png" alt="butterfree">
      <p>Ele adora o néctar das flores e pode localizar manchas de flores que contenham até mesmo pequenas quantidades
        de pólen.</p>
    </div>
    <div>
      <h1>013 - Weedle</h1>
      <img src="images/weedle.png" alt="weedle">
      <p>Cuidado com o ferrão afiado em sua cabeça. Esconde-se na grama e nos arbustos onde come folhas.</p>
    </div>
    <div>
      <h1>014 - Kakuna</h1>
      <img src="images/kakuna.png" alt="kakuna">
      <p>Capaz de se mover apenas ligeiramente. Quando ameaçado, pode esticar o ferrão e envenenar o inimigo.</p>
    </div>
    <div>
      <h1>015 - Beedrill</h1>
      <img src="images/beedril - Copiar.png" alt="beedrill">
      <p>Possui três ferrões venenosos nas patas dianteiras e na cauda. Eles são usados ​​para atacar repetidamente o
        inimigo.</p>
    </div>
    <div>
      <h1>016 - Pidgey</h1>
      <img src="images/pidgey.png" alt="pidgey">
      <p>Muito dócil. Se for atacado, muitas vezes levanta areia para se proteger, em vez de revidar.</p>
    </div>
    <div>
      <h1>017 - Pidgeotto</h1>
      <img src="images/pidgeotto.png" alt="pidgeotto">
      <p>Este Pokémon está cheio de vitalidade. Ele voa constantemente pelo seu grande território em busca de presas.
      </p>
    </div>
    <div>
      <h1>018 - Pidgeot</h1>
      <img src="images/pidgeot.png" alt="pidgeot">
      <p>Este Pokémon voa na velocidade Mach 2 em busca de presas. Suas grandes garras são temidas como armas malignas.
      </p>
    </div>
    <div>
      <h1>019 - Rattata</h1>
      <img src="images/rattata.png" alt="rattata">
      <p>Mastigará qualquer coisa com suas presas. Se você vir um, pode ter certeza de que mais 40 vivem na área.</p>
    </div>
    <div>
      <h1>020 - Raticate</h1>
      <img src="images/raticate.png" alt="raticate">
      <p>Suas patas traseiras são palmadas. Eles agem como nadadeiras, para que possam nadar em rios e caçar presas.</p>
    </div>
    <div>
      <h1>021 - Spearow</h1>
      <img src="images/spearow.png" alt="spearow">
      <p>Inepto em voar alto. No entanto, pode voar muito rápido para proteger o seu território.</p>
    </div>
    <div>
      <h1>022 - Fearow</h1>
      <img src="images/fearow - Copiar.png" alt="">
      <p>Um Pokémon que remonta a muitos anos. Se sentir perigo, ele voa alto e para longe, instantaneamente.</p>
    </div>
    <div>
      <h1>023 - Ekans</h1>
      <img src="images/ekans.png" alt="ekans">
      <p>Ele pode soltar livremente sua mandíbula para engolir presas grandes inteiras. No entanto, pode ficar muito
        pesado para ser movido. A very common sight in grasslands and such. It flicks its tongue in and out to sense
        danger in its surroundings.</p>
    </div>
    <div>
      <h1>024 - Arbok</h1>
      <img src="images/arbok - Copiar.png" alt="arbok">
      <p>O padrão em sua barriga parece ser um rosto assustador. Inimigos fracos fugirão apenas ao ver o padrão. Este
        Pokémon é muito tenaz. Depois de atingir sua presa, ele não desistirá da perseguição, não importa quão longe a
        presa vá.</p>
    </div>
    <div>
      <h1>025 - Pikachu</h1>
      <img src="images/pikachu.png" alt="pikachu">
      <p>Quando está irritado, descarrega imediatamente a energia armazenada nas bolsas em suas bochechas. Quando vários
        desses Pokémon se reúnem, sua eletricidade pode aumentar e causar tempestades com raios.</p>
    </div>
    <div>
      <h1>026 - Raichu</h1>
      <img src="images/raichu.png" alt="raichu">
      <p>Sua cauda descarrega eletricidade no solo, protegendo-o de choques. Se as bolsas elétricas em suas bochechas
        ficarem totalmente carregadas, ambas as orelhas ficarão retas.</p>
    </div>
    <div>
      <h1>027 - Sandshrew</h1>
      <img src="images/sandshrew.png" alt="sandshrew">
      <p>Ele cava tocas profundas para viver. Quando em perigo, enrola o corpo para resistir aos ataques. Não importa a
        altura de onde caia, este Pokémon pode salvar-se rolando até formar uma bola e quicando.</p>
    </div>
    <div>
      <h1>028 - Sandslash</h1>
      <img src="images/sandslash.png" alt="sandslash">
      <p>Ele é adepto de atacar com os espinhos nas costas e suas garras afiadas enquanto corre rapidamente.Os espinhos
        em seu corpo são feitos de sua pele endurecida. Ele rola e ataca os inimigos com seus espinhos.</p>
    </div>
    <div>
      <h1>029 - Nidoran♀</h1>
      <img src="images/nidoranF.png" alt="nidoran♀">
      <p>As fêmeas são mais sensíveis aos cheiros do que os machos. Enquanto procuram alimentos, eles usam seus bigodes
        para verificar a direção do vento e ficar na direção do vento em relação aos predadores. Ele usa seus dentes
        incisivos duros para esmagar e comer frutas. A ponta do chifre de uma fêmea Nidoran é um pouco mais arredondada
        do que a ponta do chifre de um macho.</p>
    </div>
    <div>
      <h1>030 - Nidorina</h1>
      <img src="images/nidorina.png" alt="nidorina">
      <p>O chifre em sua cabeça atrofiou. Acredita-se que isso aconteça para que os filhos de Nidorina não sejam
        cutucados enquanto a mãe os alimenta. Se o grupo for ameaçado, estes Pokémon irão unir-se para atacar os
        inimigos com um coro de ondas ultrassónicas.</p>
    </div>
    <div>
      <h1>031 - Nidoqueen</h1>
      <img src="images/nidoqueen.png" alt="nidoqueen">
      <p>Nidoqueen é melhor na defesa do que no ataque. Com escamas como armaduras, este Pokémon protegerá seus filhos
        de qualquer tipo de ataque. Nidoqueen é melhor na defesa do que no ataque. Com escamas como armaduras, este
        Pokémon protegerá seus filhos de qualquer tipo de ataque.</p>
    </div>
    <div>
      <h1>032 - Nidoran♂</h1>
      <img src="images/nidoranM.png" alt="nidoran♂">
      <p>O chifre na testa de um Nidoran masculino contém um veneno poderoso. Este é um Pokémon muito cauteloso, sempre
        esticando as orelhas grandes. Pequeno mas corajoso, este Pokémon manter-se-á firme e até arriscará a sua vida em
        batalha para proteger a fêmea com quem é amigo.</p>
    </div>
    <div>
      <h1>033 - Nidorino</h1>
      <img src="images/nidorino.png" alt="nidorino">
      <p>Com um chifre mais duro que o diamante, este Pokémon despedaça pedras enquanto procura uma pedra da lua. É
        nervoso e rápido para agir agressivamente. A potência de seu veneno aumenta junto com o nível de adrenalina
        presente em seu corpo.</p>
    </div>
    <div>
      <h1>034 - Nidoking</h1>
      <img src="images/nidoking.png" alt="nidoking">
      <p>Quando fica furioso, é impossível controlar. Mas na presença de uma Nidoqueen com quem convive há muito tempo,
        Nidoking se acalma. Nidoking se orgulha de sua força. É forte e espirituoso em batalha, fazendo uso de sua cauda
        grossa e chifre esmagador de diamantes.</p>
    </div>
    <div>
      <h1>035 - Clefairy</h1>
      <img src="images/clefairy.png" alt="clefairy">
      <p>Em noites de lua cheia, Clefairy se reúne de todos os lugares e dança. Tomar banho à luz da lua os faz flutuar.
        Nas noites de lua cheia, eles se reúnem e dançam. A área circundante está envolta em um campo magnético anormal.
      </p>
    </div>
    <div>
      <h1>036 - Clefable</h1>
      <img src="images/clefable - Copiar.png" alt="clefable">
      <p>Dizem que vivem em montanhas remotas e tranquilas, esse tipo de fada tem uma forte aversão a ser vista. Tem um
        sentido de audição aguçado. Ele pode facilmente ouvir um alfinete caindo a quase 1.100 metros de distância.</p>
    </div>
    <div>
      <h1>037 - Vulpix</h1>
      <img src="images/vulpix.png" alt="vulpix">
      <p>Se for atacado por um inimigo mais forte que ele, ele finge estar ferido para enganar o inimigo e foge. À
        medida que seu corpo cresce, suas seis caudas quentes ficam mais bonitas, com uma pelagem mais luxuosa.</p>
    </div>
    <div>
      <h1>038 - Ninetales</h1>
      <img src="images/ninetales.png" alt="ninetales">
      <p>Algumas lendas afirmam que cada uma de suas nove caudas tem seu próprio tipo de poder místico especial. Tem
        nove caudas longas e pêlo que brilha em ouro. Diz-se que vive 1.000 anos.</p>
    </div>
    <div>
      <h1>039 - Jigglypuff</h1>
      <img src="images/jigglypuff.png" alt="jigglypuff">
      <p>Quando seus enormes olhos tremem, ele canta uma melodia misteriosamente reconfortante que acalma seus inimigos.
        Se inflar para cantar uma canção de ninar, pode durar mais tempo e causar certa sonolência no público.</p>
    </div>
    <div>
      <h1>040 - Wigglytuff</h1>
      <img src="images/wigglytuff.png" alt="wigglytuff">
      <p>Tem uma pelagem muito fina. Tome cuidado para não deixá-lo com raiva, ou ele pode inflar continuamente e bater
        com força. O pelo rico e fofo que cobre seu corpo é tão gostoso que qualquer um que o sente não consegue parar
        de tocá-lo.</p>
    </div>
    <div>
      <h1>041 - Zubat</h1>
      <img src="images/zubat.png" alt="zubat">
      <p>Ele emite ondas ultrassônicas de sua boca para verificar o que está ao seu redor. Mesmo em cavernas estreitas,
        Zubat voa com habilidade. Os Zubat vivem em cavernas, onde a luz do sol não alcança. De manhã, eles se reúnem
        para se aquecerem enquanto dormem.</p>
    </div>
    <div>
      <h1>042 - Golbat</h1>
      <img src="images/golbat.png" alt="golbat">
      <p>Ele adora beber o sangue de outras criaturas. Diz-se que se encontrar outros da sua espécie a passar fome, por
        vezes partilha o sangue que recolheu. Seus pés são minúsculos, mas este Pokémon anda com habilidade. Ele se
        aproxima sorrateiramente de uma presa adormecida antes de afundar suas presas e sugar seu sangue.</p>
    </div>
    <div>
      <h1>043 - Oddish</h1>
      <img src="images/oddish.png" alt="oddish">
      <p>Seu nome científico é Oddium vagueus. Diz-se que ele percorre distâncias de até 300 metros quando a noite cai,
        caminhando sobre suas duas raízes. Quando é acordado pelo luar, ele vagueia. Mas durante o dia, permanece no
        subsolo.</p>
    </div>
    <div>
      <h1>044 - Gloom</h1>
      <img src="images/gloom - Copiar.png" alt="gloom">
      <p>O fluido que escorre da boca não é baba. É um néctar usado para atrair presas. Ele secreta um néctar pegajoso e
        parecido com baba. Embora doce, tem um cheiro muito repulsivo para chegar muito perto.</p>
    </div>
    <div>
      <h1>045 - Vileplume</h1>
      <img src="images/vileplume.png" alt="vileplume">
      <p>O botão floresce com um estrondo. Em seguida, ele começa a espalhar pólen alergênico e venenoso. Ele espalha
        diabolicamente o pólen alergênico de suas pétalas, que são as maiores do mundo.</p>
    </div>
    <div>
      <h1>046 - Paras</h1>
      <img src="images/paras.png" alt="paras">
      <p>Fazem tocas subterrâneas para roer raízes de árvores. Os cogumelos nas costas absorvem a maior parte dos
        nutrientes.
      </p>
    </div>
    <div>
      <h1>047 - Parasect</h1>
      <img src="images/parasect.png" alt="parasect">
      <p>O inseto hospedeiro tem sua energia drenada pelo cogumelo nas suas costas. O cogumelo parece fazer todo
        pensamento.</p>
    </div>
    <div>
      <h1>048 - Venonat</h1>
      <img src="images/venonat.png" alt="venonat">
      <p>O veneno escorre por todo o seu corpo. Ele captura pequenos insetos à noite que são atraídos pela luz. Seus
        olhos funcionam como radar, permitindo que ele permaneça ativo na escuridão. Os olhos também podem disparar
        raios poderosos.</p>
    </div>
    <div>
      <h1>049 - Venomoth</h1>
      <img src="images/venomoth.png" alt="venomoth">
      <p>Suas asas são cobertas por escamas semelhantes a poeira. Cada vez que bate as asas, libera poeira altamente
        tóxica. Quando ataca, bate violentamente suas grandes asas para espalhar seu pó venenoso por toda parte.</p>
    </div>
    <div>
      <h1>050 - Diglett</h1>
      <img src="images/diglett.png" alt="diglett">
      <p>Vive cerca de um metro abaixo do solo, onde se alimenta de raízes de plantas. Às vezes aparece acima do solo.
        Sua pele é muito fina. Se for exposto à luz, seu sangue aquece, enfraquecendo-o.</p>
    </div>
    <div>
      <h1>051 - Dugtrio</h1>
      <img src="images/dugtrio.png" alt="dugtrio">
      <p>Suas três cabeças balançam separadamente para cima e para baixo para soltar o solo próximo, facilitando a
        escavação. Na batalha, ele escava o solo e ataca o inimigo desavisado de uma direção inesperada.</p>
    </div>
    <div>
      <h1>052 - Meowth</h1>
      <img src="images/meowth.png" alt="meowth">
      <p>Tudo o que faz é dormir durante o dia. À noite, patrulha seu território com os olhos brilhantes. Ele adora
        coisas que brilham. Quando vê um objeto brilhante, a moeda de ouro em sua cabeça também brilha.</p>
    </div>
    <div>
      <h1>053 - Persian</h1>
      <img src="images/persian.png" alt="persian">
      <p>Embora seu pelo tenha muitos admiradores, é difícil criá-lo como animal de estimação por causa de sua maldade
        inconstante. Tem um temperamento cruel. Cuidado se ele levantar a cauda. Este é um sinal de que ele está prestes
        a atacar e morder.</p>
    </div>
    <div>
      <h1>054 - Psyduck</h1>
      <img src="images/psyduck.png" alt="psyduck">
      <p>É constantemente assolado por uma dor de cabeça. Quando a dor de cabeça fica intensa, ela começa a usar poderes
        misteriosos. Se a dor de cabeça crônica atingir o pico, ela poderá exibir poderes estranhos. Parece incapaz de
        recordar tal episódio.</p>
    </div>
    <div>
      <h1>055 - Golduck</h1>
      <img src="images/golduck.png" alt="golduck">
      <p>Quando ele nada a toda velocidade usando seus membros longos e palmados, sua testa de alguma forma começa a
        brilhar. Ele nada graciosamente nos rios e lagos calmos e lentos dos quais tanto gosta.</p>
    </div>
    <div>
      <h1>056 - Mankey</h1>
      <img src="images/mankey.png" alt="mankey">
      <p>Vive em grupos nas copas das árvores. Se perder de vista o seu grupo, ficará furioso com a sua solidão. É
        extremamente rápido ficar com raiva. Poderia ser dócil em um momento e se debater no instante seguinte.</p>
    </div>
    <div>
      <h1>057 - Primeape</h1>
      <img src="images/primeape.png" alt="primeape">
      <p>Fica extremamente furioso se sentir alguém olhando para ele. Ele persegue qualquer um que encontre seu brilho.
        Alguns pesquisadores teorizam que Primeape permanece com raiva mesmo dentro de uma Pokébola.</p>
    </div>
    <div>
      <h1>058 - Growlithe</h1>
      <img src="images/growlithe - Copiar.png" alt="growlithe">
      <p>Tem uma natureza corajosa e confiável. Ele enfrenta destemidamente inimigos maiores e mais fortes. É muito
        amigável e fiel às pessoas. Ele tentará repelir os inimigos latindo e mordendo.</p>
    </div>
    <div>
      <h1>059 - Arcanine</h1>
      <img src="images/arcanine - Copiar.png" alt="arcanine">
      <p>Um antigo pergaminho ilustrado mostra que as pessoas ficavam cativadas por seu movimento enquanto ele percorria
        as pradarias. A sua magnífica casca transmite uma sensação de majestade. Qualquer um que ouça isso não pode
        deixar de rastejar diante disso.</p>
    </div>
    <div>
      <h1>060 - Poliwag</h1>
      <img src="images/poliwag.png" alt="poliwag">
      <p>O redemoinho em sua barriga mostra seu interior aparecendo através da pele. Aparece mais claramente depois que
        Poliwag come. Suas pernas cresceram recentemente e ele não consegue andar muito bem. Parece preferir nadar na
        água.</p>
    </div>
    <div>
      <h1>061 - Poliwhirl</h1>
      <img src="images/poliwhirl.png" alt="poliwhirl">
      <p>Suas duas pernas são bem desenvolvidas. Embora possa viver no solo, prefere viver na água. Sua pele está úmida
        por todo o corpo. A pele da espiral abdominal também é macia.</p>
    </div>
    <div>
      <h1>062 - Poliwrath</h1>
      <img src="images/poliwrath.png" alt="poliwrath">
      <p>Embora seja hábil em um estilo de natação dinâmico que utiliza todos os seus músculos, por algum motivo ele
        vive em terra firme. Ele pode usar seus braços e pernas bem desenvolvidos para correr na superfície da água por
        uma fração de segundo.</p>
    </div>
    <div>
      <h1>063 - Abra</h1>
      <img src="images/abra - Copiar.png" alt="abra">
      <p>Este Pokémon usa seus poderes psíquicos enquanto dorme. O conteúdo dos sonhos de Abra afeta os poderes que o
        Pokémon exerce. Abra pode se teletransportar durante o sono. Aparentemente, quanto mais profundamente Abra
        dorme, mais longe vão seus teletransportes.</p>
    </div>
    <div>
      <h1>064 - Kadabra</h1>
      <img src="images/kadabra.png" alt="kadabra">
      <p>Usando seu poder psíquico, Kadabra levita enquanto dorme. Ele usa sua cauda elástica como travesseiro. A
        telecinesia deste Pokémon é imensamente poderosa. Para se preparar para a evolução, Kadabra armazena energia
        psíquica na estrela em sua testa.</p>
    </div>
    <div>
      <h1>065 - Alakazam</h1>
      <img src="images/alakazam.png" alt="alakazam">
      <p>Tem um nível de inteligência incrivelmente alto. Alguns dizem que Alakazam se lembra de tudo o que acontece com
        ele, desde o nascimento até a morte. Alakazam exerce poderosos poderes psíquicos. Dizem que este Pokémon usou
        esses poderes para criar as colheres que segura. </p>
    </div>
    <div>
      <h1>066 - Machop</h1>
      <img src="images/machop.png" alt="machop">
      <p>Todo o seu corpo é composto por músculos. Mesmo sendo do tamanho de uma criança humana, pode arremessar 100
        adultos. Sempre cheio de força, ele passa o tempo levantando pedras. Fazer isso o torna ainda mais forte.</p>
    </div>
    <div>
      <h1>067 - Machoke</h1>
      <img src="images/machoke.png" alt="machoke">
      <p>Seu corpo musculoso é tão poderoso que ele deve usar um cinto economizador de energia para poder regular seus
        movimentos. Seu corpo formidável nunca se cansa. Ajuda as pessoas realizando trabalhos como a movimentação de
        mercadorias pesadas.</p>
    </div>
    <div>
      <h1>068 - Machamp</h1>
      <img src="images/machamp.png" alt="machamp">
      <p>Ele soca com seus quatro braços em uma velocidade estonteante. Pode lançar 1.000 socos em dois segundos. Pode
        derrubar um trem voando com um soco. No entanto, é péssimo em trabalhos delicados com os dedos.</p>
    </div>
    <div>
      <h1>069 - Bellsprout</h1>
      <img src="images/bellsprout.png" alt="bellsprout">
      <p>Não importa o que Bellsprout esteja fazendo, se detectar movimento próximo, ele reagirá imediatamente
        estendendo a mão com suas vinhas finas. Ele planta os pés no subsolo para se reidratar. Ao fazer isso, ele não
        poderá fugir se for atacado.</p>
    </div>
    <div>
      <h1>070 - Weepinbell</h1>
      <img src="images/weepinbell.png" alt="weepinbell">
      <p>Embora esteja cheio de ácido, não derrete porque também exala um fluido protetor. As partes folhosas atuam como
        cortadores para cortar os inimigos. Cospe um fluido que dissolve tudo.</p>
    </div>
    <div>
      <h1>071 - Victreebell</h1>
      <img src="images/victreebell.png" alt="victreebell">
      <p>Ele atrai a presa para a boca com um aroma de néctar. A presa indefesa é derretida com um líquido dissolvente.
        Depois de dissolver muitas presas, o ácido deste Pokémon fica mais doce. Isso torna ainda mais fácil atrair mais
        presas.</p>
    </div>
    <div>
      <h1>072 - Tentacool</h1>
      <img src="images/tentacool.png" alt="tentacool">
      <p>Quando a maré baixa, Tentacool desidratado pode ser encontrado deixado para trás na costa. Seus olhos são
        transparentes como cristais. Deles, dispara misteriosos raios de luz.</p>
    </div>
    <div>
      <h1>073 - Tentacruel</h1>
      <img src="images/tentacruel.png" alt="tentacruel">
      <p>Nas raras ocasiões em que ocorrem grandes surtos de Tentacruel, todos os Pokémon peixes desaparecem do mar
        circundante. Na batalha, ele estende todos os 80 tentáculos para prender seu oponente dentro de uma rede
        venenosa.</p>
    </div>
    <div>
      <h1>074 - Geodude</h1>
      <img src="images/geodude.png" alt="geodude">
      <p>Em repouso, parece uma pedra. Pisá-lo descuidadamente fará com que ele balance os punhos com raiva. A maioria
        das pessoas pode não perceber, mas um olhar mais atento revelará que existem muitos Geodude por aí.</p>
    </div>
    <div>
      <h1>075 - Graveler</h1>
      <img src="images/graveler.png" alt="graveler">
      <p>Um caminhante lento, ele rola para se mover. Ele não presta atenção a nenhum objeto que esteja em seu caminho.
        Rochas cobertas de musgo são a comida favorita de Graveler. Ele consome mais de uma tonelada deles por dia,
        mastigando ruidosamente enquanto come.</p>
    </div>
    <div>
      <h1>076 - Golem</h1>
      <img src="images/golem.png" alt="golem">
      <p>Está envolto em uma casca dura que é tão robusta quanto placas de rocha. Ele troca de pele uma vez por ano para
        crescer. Ele se explode deliberadamente e depois usa essa força explosiva para pular de montanha em montanha.
      </p>
    </div>
    <div>
      <h1>077 - Ponyta</h1>
      <img src="images/ponyta.png" alt="ponyta">
      <p>Cerca de uma hora após o nascimento, a crina e a cauda de Ponyta crescem, dando ao Pokémon uma aparência
        impressionante. Suas pernas ficam fortes enquanto ele persegue seus pais. Corre o dia todo nos campos e nas
        montanhas.</p>
    </div>
    <div>
      <h1>078 - Rapidash</h1>
      <img src="images/rapidash.png" alt="rapidash">
      <p>Ele galopa a quase 150 mph (240 km/h). Com sua crina brilhando ferozmente, ele corre como se fosse uma flecha.
        Tem uma
        aceleração surpreendente. Parado, ele pode atingir a velocidade máxima em 10 passos.</p>
    </div>
    <div>
      <h1>079 - Slowpoke</h1>
      <img src="images/slowpoke.png" alt="slowpoke">
      <p>É incrivelmente lento e estúpido. Demora cinco segundos para sentir dor quando está sob ataque. Está sempre
        vagamente perdido em pensamentos, mas ninguém sabe no que está pensando. É bom em pescar com a cauda.</p>
    </div>
    <div>
      <h1>080 - Slowbro</h1>
      <img src="images/slowbro.png" alt="slowbro">
      <p>Quando um Slowpoke foi caçar no mar, sua cauda foi mordida por um Shellder. Isso o fez evoluir para Slowbro. Se
        o Shellder, que morde o rabo, for derrubado em uma batalha dura, este Pokémon voltará a ser um Slowpoke comum.
      </p>
    </div>
    <div>
      <h1>081 - Magnemite</h1>
      <img src="images/magnemite.png" alt="magnemite">
      <p>As ondas eletromagnéticas emitidas pelas unidades nas laterais de sua cabeça expelem a antigravidade, o que lhe
        permite flutuar. Ele se move enquanto paira constantemente. Ele descarrega ondas eletromagnéticas e assim por
        diante das unidades laterais.</p>
    </div>
    <div>
      <h1>082 - Magneton</h1>
      <img src="images/magneton.png" alt="magneton">
      <p>Três Magnemite estão ligados por uma forte força magnética. Dores de ouvido ocorrerão se você chegar muito
        perto. Eles são formados por vários Magnemites interligados. Eles freqüentemente aparecem quando as manchas
        solares aumentam.</p>
    </div>
    <div>
      <h1>083 - Farfetch'd</h1>
      <img src="images/farfetchd.png" alt="farfetchd">
      <p>Não pode viver sem o talo que segura. É por isso que defende o talo dos atacantes com a sua vida.</p>
    </div>
    <div>
      <h1>084 - Doduo</h1>
      <img src="images/doduo.png" alt="doduo">
      <p>Suas cabeças gêmeas têm exatamente os mesmos genes e lutam em perfeita sincronia entre si. Suas cabeças nunca
        dormem ao mesmo tempo – cada uma se reveza para vigiar enquanto a outra dorme, trocando a cada hora ou mais.</p>
    </div>
    <div>
      <h1>085 - Dodrio</h1>
      <img src="images/dodrio.png" alt="dodrio">
      <p>Agora tem três corações e três conjuntos de pulmões. Embora não possa correr tão rápido quanto Doduo, Dodrio
        pode continuar correndo por longos períodos de tempo. A cabeça mais forte com o pescoço mais grosso torna-se o
        líder e ganha o controle primário do corpo.</p>
    </div>
    <div>
      <h1>086 - Seel</h1>
      <img src="images/seel.png" alt="seel">
      <p>A saliência na cabeça é muito dura. É usado para quebrar gelo espesso. Quanto mais frio fica, melhor é a
        sensação. Ele nada alegremente em oceanos tão frios que ficam cheios de gelo flutuante.</p>
    </div>
    <div>
      <h1>087 - Dewgong</h1>
      <img src="images/dewgong.png" alt="dewgong">
      <p>Ele dorme nas águas rasas do oceano durante o dia e depois procura comida à noite, quando está mais frio. Ele
        armazena energia térmica em seu corpo para se defender do frio. Ele nada a oito nós, mesmo em águas geladas.</p>
    </div>
    <div>
      <h1>088 - Grimer</h1>
      <img src="images/grimer.png" alt="grimer">
      <p>Nascidos do lodo, esses Pokémon agora se reúnem em locais poluídos e aumentam as bactérias em seus corpos.
        Quando os corpos de dois desses Pokémon são combinados, novos venenos são criados.</p>
    </div>
    <div>
      <h1>089 - Muk</h1>
      <img src="images/muk.png" alt="muk">
      <p>Está densamente coberto com um lodo imundo e vil. É tão tóxico que até suas pegadas contêm veneno. É tão
        fedorento! O corpo de Muk contém elementos tóxicos e qualquer planta murchará ao passar.</p>
    </div>
    <div>
      <h1>090 - Shellder</h1>
      <img src="images/shellder.png" alt="shellder">
      <p>Está envolto em uma concha que é mais dura que o diamante. Por dentro, porém, é surpreendentemente macio.
        Agarrar-se a um oponente revela suas partes vulneráveis, por isso ele usa esse movimento apenas como último
        recurso.</p>
    </div>
    <div>
      <h1>091 - Cloyster</h1>
      <img src="images/cloyster.png" alt="cloyster">
      <p>Cloyster que vive em mares com fortes correntes de maré desenvolvem pontas grandes e afiadas em suas conchas.
        Quando atacado, ele lança seus espinhos em rajadas rápidas. Suas entranhas nunca foram vistas.</p>
    </div>
    <div>
      <h1>092 - Gastly</h1>
      <img src="images/gastly.png" alt="gastly">
      <p>Ele envolve seu oponente em seu corpo gasoso, enfraquecendo lentamente sua presa ao envenená-la através da
        pele. Seu corpo é feito de gás. Apesar de não ter substância, pode envolver um oponente de qualquer tamanho e
        causar asfixia.</p>
    </div>
    <div>
      <h1>093 - Haunter</h1>
      <img src="images/haunter.png" alt="haunter">
      <p>Ele gosta de se esconder no escuro e bater nos ombros com a mão gasosa. Seu toque causa estremecimentos sem
        fim. Na escuridão total, onde nada é visível, Haunter espreita, perseguindo silenciosamente a sua próxima
        vítima.</p>
    </div>
    <div>
      <h1>094 - Gengar</h1>
      <img src="images/gengar.png" alt="gengar">
      <p>Para roubar a vida do seu alvo, ele se esconde na sombra da presa e espera silenciosamente por uma
        oportunidade. Escondendo-se nas sombras das pessoas à noite, absorve o calor. O frio que causa faz as vítimas
        tremerem.</p>
    </div>
    <div>
      <h1>095 - Onix</h1>
      <img src="images/onix.png" alt="onix">
      <p>À medida que escava o solo, absorve muitos objetos duros. É isso que torna seu corpo tão sólido. Ele
        rapidamente perfura o solo a 80 km/h, contorcendo-se e torcendo seu corpo maciço e robusto.</p>
    </div>
    <div>
      <h1>096 - Drowzee</h1>
      <img src="images/drowzee.png" alt="drowzee">
      <p>Ele se lembra de cada sonho que come. Raramente come os sonhos dos adultos porque os das crianças são muito
        mais saborosos. </p>
    </div>
    <div>
      <h1>097 - Hypno</h1>
      <img src="images/hypno.png" alt="hypno">
      <p>Quando ele encara um inimigo, ele usa uma mistura de movimentos psíquicos, como Hipnose e Confusão. Sempre
        segurando um pêndulo que balança em um ritmo constante, causa sonolência em quem estiver por perto.</p>
    </div>
    <div>
      <h1>098 - Krabby</h1>
      <img src="images/krabby.png" alt="krabby">
      <p>Pode ser encontrado perto do mar. As pinças grandes voltam a crescer se forem arrancadas das órbitas. Se sentir
        o perigo se aproximando, ele se cobre com bolhas que saem da boca para parecer maior.</p>
    </div>
    <div>
      <h1>099 - Kingler</h1>
      <img src="images/kingler.png" alt="kingler">
      <p>A pinça maior tem força de 10.000 cavalos de potência. No entanto, é tão pesado que é difícil mirar. </p>
    </div>
    <div>
      <h1>100 - Voltorb</h1>
      <img src="images/voltorb.png" alt="voltorb">
      <p>Ele rola para se mover. Se o solo for irregular, um solavanco repentino ao atingir uma colisão pode fazer com
        que ela exploda. Geralmente é encontrado em usinas de energia. Facilmente confundido com uma Pokébola, ele já
        eletrocutou muitas pessoas.</p>
    </div>
    <div>
      <h1>101 - Electrode</h1>
      <img src="images/electrode.png" alt="electrode">
      <p>Quanto mais energia ele carrega, mais rápido fica. Mas isso também aumenta a probabilidade de explodir. Ele
        explode em resposta até mesmo a estímulos menores. É temido, com o apelido de Bomb Ball.</p>
    </div>
    <div>
      <h1>102 - Exeggcute</h1>
      <img src="images/exeggute.png" alt="exeggcute">
      <p>Se você tocar em uma das cabeças de Exeggcute, confundindo-a com um ovo, as outras cabeças irão rapidamente se
        reunir e atacar você em um enxame. Usando telepatia que apenas o colega Exeggcute consegue captar, eles sempre
        formam um grupo de seis.</p>
    </div>
    <div>
      <h1>103 - Exeggutor</h1>
      <img src="images/exeggutor.png" alt="exeggutor">
      <p>É chamada de Selva Ambulante. Cada uma das nozes tem um rosto e uma vontade própria. Diz-se que em raras
        ocasiões, uma de suas cabeças cairá e continuará como Exeggcute.</p>
    </div>
    <div>
      <h1>104 - Cubone</h1>
      <img src="images/cubone.png" alt="cubone">
      <p>Quando a memória de sua falecida mãe o leva às lágrimas, seus gritos ecoam tristemente dentro do crânio que ele
        usa na cabeça. Este Pokémon usa a caveira de sua falecida mãe. Às vezes, os sonhos de Cubone o fazem chorar, mas
        cada lágrima que Cubone derrama o torna mais forte.</p>
    </div>
    <div>
      <h1>105 - Marowak</h1>
      <img src="images/marowak.png" alt="marowak">
      <p>Este Pokémon superou sua tristeza para desenvolver um novo corpo robusto. Marowak enfrenta seus oponentes com
        bravura, usando um osso como arma. Quando este Pokémon evoluiu, o crânio de sua mãe se fundiu a ele. O
        temperamento de Marowak também se tornou cruel ao mesmo tempo.</p>
    </div>
    <div>
      <h1>106 - Hitmonlee</h1>
      <img src="images/hitmonlee.png" alt="hitmonlee">
      <p>No exato momento em que acerta o chute no alvo, Hitmonlee endurece os músculos da sola do pé, maximizando a
        força do chute. Possui controle total sobre os ligamentos das pernas, expandindo-os e contraindo-os para dobrar
        o alcance dos chutes.</p>
    </div>
    <div>
      <h1>107 - Hitmonchan</h1>
      <img src="images/hitmonchan.png" alt="hitmoncahn">
      <p>Ele encurrala seus inimigos com socos combinados de ambos os lados e depois os finaliza com um único soco
        direto lançado a mais de 480 km/h. Seus punhos são massas de músculos. É preciso fazer uma pausa a cada três
        minutos para estabilizar a respiração e o humor.</p>
    </div>
    <div>
      <h1>108 - Lickitung</h1>
      <img src="images/lickitung.png" alt="lickitung">
      <p>Se a saliva pegajosa deste Pokémon entrar em contato com você e você não limpá-la, uma coceira intensa se
        instalará. Pokémon Bug são a principal fonte de alimento de Lickitung. Este Pokémon paralisa sua presa com uma
        lambida de sua longa língua e depois engole a presa inteira.</p>
    </div>
    <div>
      <h1>109 - Koffing</h1>
      <img src="images/koffing.png" alt="koffing">
      <p>O gás tóxico é mantido dentro de seu corpo fino em forma de balão, podendo causar explosões massivas. Os gases
        venenosos que contém são um pouco mais leves que o ar. É por isso que está sempre ligeiramente no ar.</p>
    </div>
    <div>
      <h1>110 - Weezing</h1>
      <img src="images/weezing.png" alt="weezing">
      <p>O perfume de alta qualidade é feito usando seus gases venenosos internos, diluindo-os ao mais alto nível.
        Quando inala gases venenosos do lixo, seu corpo se expande e seu interior cheira muito pior.</p>
    </div>
    <div>
      <h1>111 - Rhyhorn</h1>
      <img src="images/rhyhorn.png" alt="rhyhorn">
      <p>Rhyhorn reivindica uma área com mais de seis milhas de raio como seu território. Aparentemente, ele se esquece
        de onde fica esse território durante a execução. Depois que começar a correr, ele não parará, mesmo que colida
        com pedras. Essa disposição é o que fez com que seu habitat se expandisse.</p>
    </div>
    <div>
      <h1>112 - Rhydon</h1>
      <img src="images/rhydon.png" alt="rhydon">
      <p>O chifre de um Rhydon é poderoso o suficiente para esmagar diamantes brutos. Esses Pokémon aprimoram seus
        chifres batendo-os um no outro. Ele evoluiu para andar usando apenas as patas traseiras, o que lhe permitiu
        expandir seu habitat até mesmo em montanhas íngremes.</p>
    </div>
    <div>
      <h1>113 - Chansey</h1>
      <img src="images/chansey.png" alt="chansey">
      <p>Este gentil Pokémon põe ovos altamente nutritivos e os compartilha com Pokémon ou pessoas feridas.Ele anda com
        cuidado para evitar que o ovo se quebre. No entanto, é extremamente rápido em fugir.</p>
    </div>
    <div>
      <h1>114 - Tangela</h1>
      <img src="images/tangela.png" alt="tangela">
      <p>Escondido sob um emaranhado de vinhas que cresce sem parar mesmo que as vinhas sejam arrancadas, a verdadeira
        aparência deste Pokémon permanece um mistério. As vinhas de uma Tangela têm um aroma distinto. Em algumas partes
        de Galar, as vinhas Tangela são utilizadas como ervas.</p>
    </div>
    <div>
      <h1>115 - Kangaskhan</h1>
      <img src="images/kangaskhan.png" alt="kangaskhan">
      <p>Embora carregue seu bebê em uma bolsa na barriga, Kangaskhan é rápido. Intimida seus oponentes com golpes
        rápidos. Existem registros de uma criança humana perdida sendo criada por um Kangaskhan sem filhos.</p>
    </div>
    <div>
      <h1>116 - Horsea</h1>
      <img src="images/horsea.png" alt="horsea">
      <p>Se atacado - mesmo por um grande inimigo - Horsea nada sem esforço para um local seguro, utilizando sua
        barbatana dorsal bem desenvolvida. Ele mantém o equilíbrio usando sua cauda, ​​que é enrolada como uma bobina.
        Pode espirrar tinta pela boca.</p>
    </div>
    <div>
      <h1>117 - Seadra</h1>
      <img src="images/seadra.png" alt="seadra">
      <p>O macho cria os filhotes. Se for abordado enquanto cuida dos filhotes, usará seus espinhos tóxicos para afastar
        o intruso. As pontas das nadadeiras vazam veneno. Suas nadadeiras e ossos são altamente valorizados como
        ingredientes na fitoterapia.</p>
    </div>
    <div>
      <h1>118 - Goldeen</h1>
      <img src="images/goldeen.png" alt="goldeen">
      <p>Suas barbatanas dorsal, peitoral e caudal ondulam elegantemente na água. É por isso que é conhecido como
        Dançarino da Água. Suas nadadeiras dorsal e peitoral são fortemente desenvolvidas como músculos. Pode nadar a
        uma velocidade de cinco nós.</p>
    </div>
    <div>
      <h1>119 - Seaking</h1>
      <img src="images/seaking.png" alt="seaking">
      <p>No outono, seu corpo fica mais gorduroso ao se preparar para pedir um companheiro em casamento. Adquire lindas
        cores. Usando seu chifre, ele faz buracos nas pedras do leito dos rios, fazendo ninhos para evitar que seus ovos
        sejam levados pela água.</p>
    </div>
    <div>
      <h1>120 - Staryu</h1>
      <img src="images/staryu.png" alt="staryu">
      <p>Se você visitar uma praia no final do verão, poderá ver grupos de Staryu iluminando-se em ritmo constante. Os
        Pokémon peixes mordiscam-no, mas Staryu não se incomoda. Seu corpo se regenera rapidamente, mesmo que parte dele
        seja completamente arrancado.</p>
    </div>
    <div>
      <h1>121 - Starmie</h1>
      <img src="images/starmie.png" alt="starmie">
      <p>Este Pokémon possui um órgão conhecido como núcleo. O órgão brilha em sete cores quando Starmie libera seus
        potentes poderes psíquicos. Starmie nada girando seu corpo em alta velocidade. À medida que este Pokémon navega
        pelo oceano, ele absorve minúsculos plânctons.</p>
    </div>
    <div>
      <h1>122 - Mr. Mime</h1>
      <img src="images/mrmime.png" alt="mrmine">
      <p>É um especialista em pantomima que pode criar paredes invisíveis, mas sólidas, usando gestos de mímica. As
        emanações das pontas dos dedos solidificam o ar em paredes invisíveis que repelem até mesmo ataques severos.</p>
    </div>
    <div>
      <h1>123 - Scyther</h1>
      <img src="images/scyther.png" alt="scyther">
      <p>Ele corta a grama com suas foices afiadas, movendo-se rápido demais para ser rastreado pelo olho humano. As
        foices afiadas em seus antebraços tornam-se cada vez mais afiadas ao cortar objetos duros. </p>
    </div>
    <div>
      <h1>124 - Jynx</h1>
      <img src="images/jynx.png" alt="jynx">
      <p>Em certas partes de Galar, Jynx já foi temida e adorada como a Rainha do Gelo. Os Jynx de Galar costumam ter
        vozes lindas e delicadas. Alguns desses Pokémon até reuniram uma base de fãs.</p>
    </div>
    <div>
      <h1>125 - Electabuzz</h1>
      <img src="images/electabuzz.png" alt="electabuzz">
      <p>Seu corpo descarrega eletricidade constantemente. Chegar perto dele deixará seus cabelos em pé. A pesquisa está
        progredindo no armazenamento de raios no Electabuzz para que essa energia possa ser usada a qualquer momento.
      </p>
    </div>
    <div>
      <h1>126 - Magmar</h1>
      <img src="images/magmar.png" alt="magmar">
      <p>Encontrado perto da boca de um vulcão. A temperatura corporal deste respirador de fogo é de quase 2.200 graus
        Fahrenheit. Chamas oscilantes semelhantes às do sol aparecem na superfície do corpo deste Pokémon.</p>
    </div>
    <div>
      <h1>127 - Pinsir</h1>
      <img src="images/pinsir.png" alt="pinsir">
      <p>Esses Pokémon julgam uns aos outros com base em pinças. Pinças mais grossas e impressionantes aumentam a
        popularidade entre o sexo oposto. Este Pokémon aperta suas pinças sobre sua presa e depois a divide ao meio ou a
        arremessa fora.</p>
    </div>
    <div>
      <h1>128 - Tauros</h1>
      <img src="images/tauros.png" alt="tauros">
      <p>Quando atinge um inimigo, ele ataca furiosamente enquanto chicoteia seu corpo com suas longas caudas. They
        fight each other by locking horns. The herd’s protectors take pride in their battle-scarred horns.</p>
    </div>
    <div>
      <h1>129 - Magikarp</h1>
      <img src="images/magikarp.png" alt="magikarp">
      <p>Um Pokémon patético e pouco poderoso. Pode saltar alto em raras ocasiões, mas nunca mais de dois metros. No
        passado distante, era um pouco mais forte do que os descendentes terrivelmente fracos que existem hoje.</p>
    </div>
    <div>
      <h1>130 - Gyarados</h1>
      <img src="images/gyarados.png" alt="gyarados">
      <p>Uma vez que aparece, ele fica furioso. Ele permanece enfurecido até destruir tudo ao seu redor. Aparece sempre
        que há conflito mundial, incendiando qualquer lugar por onde passa.</p>
    </div>
    <div>
      <h1>131 - Lapras</h1>
      <img src="images/lapras.png" alt="lapras">
      <p>Ele transporta pessoas através do mar em suas costas. Pode cantar um grito encantador se estiver de bom humor.
        Capaz de entender a fala humana e muito inteligente, adora nadar no mar com gente nas costas.</p>
    </div>
    <div>
      <h1>132 - Ditto</h1>
      <img src="images/ditto.png" alt="ditto">
      <p>Sua capacidade de transformação é perfeita. No entanto, se for feito rir, não consegue manter o disfarce. Ele
        pode recombinar livremente sua própria estrutura celular para se transformar em outras formas de vida. </p>
    </div>
    <div>
      <h1>133 - Eevee</h1>
      <img src="images/eevee.png" alt="eevee">
      <p>A sua capacidade de evoluir em muitas formas permite-lhe adaptar-se de forma suave e perfeita a qualquer
        ambiente. Seu código genético é irregular. Ele pode sofrer mutação se for exposto à radiação das pedras
        elementares. </p>
    </div>
    <div>
      <h1>134 - Vaporeon</h1>
      <img src="images/vaporeon.png" alt="vaporeon">
      <p>Vive perto da água. Sua longa cauda é estriada por uma barbatana, que muitas vezes é confundida com a de uma
        sereia. Sua composição celular é semelhante à das moléculas de água. Como resultado, não pode ser visto quando
        derrete na água. </p>
    </div>
    <div>
      <h1>135 - Jolteon</h1>
      <img src="images/jolteon.png" alt="jolteon">
      <p>Ele concentra as fracas cargas elétricas emitidas por suas células e lança relâmpagos perversos. Se agitado,
        usa eletricidade para alisar o pelo e lançá-lo em pequenos cachos.</p>
    </div>
    <div>
      <h1>136 - Flareon</h1>
      <img src="images/flareon.png" alt="flareon">
      <p>O ar inalado é transportado para o seu saco de chamas, aquecido e exalado como fogo que atinge mais de 3.000
        graus Fahrenheit. Ele afofa a gola de pele para esfriar a temperatura corporal, que pode chegar a 1.650 graus
        Fahrenheit.</p>
    </div>
    <div>
      <h1>137 - Porygon</h1>
      <img src="images/porygon.png" alt="porygon">
      <p>É um Pokémon artificial. Como não respira, as pessoas ficam entusiasmadas com o seu potencial de ser útil em
        qualquer ambiente. Porygon é um Pokémon artificial criado usando meios científicos avançados. Ele pode circular
        livremente pelo ciberespaço. </p>
    </div>
    <div>
      <h1>138 - Omanyte</h1>
      <img src="images/omanyte.png" alt="omanyte">
      <p>Como alguns Omanytes conseguem escapar após serem restaurados ou são soltos na natureza pelas pessoas, esta
        espécie está se tornando um problema. Este Pokémon é membro de uma espécie antiga e extinta. Omanyte rema na
        água com seus 10 tentáculos, parecendo estar apenas flutuando. </p>
    </div>
    <div>
      <h1>139 - Omastar</h1>
      <img src="images/omastar.png" alt="omastar">
      <p>Sobrecarregado por uma concha grande e pesada, Omastar não conseguia se mover muito rápido. Alguns dizem que
        foi extinto porque não conseguia pegar comida. As presas afiadas de Omastar podem esmagar pedras, mas o Pokémon
        só pode atacar as presas que estiverem ao alcance de seus tentáculos. </p>
    </div>
    <div>
      <h1>140 - Kabuto</h1>
      <img src="images/kabuto.png" alt="kabuto">
      <p>Esta espécie está quase totalmente extinta. Kabuto muda a cada três dias, tornando suas conchas cada vez mais
        duras. Embora alguns digam que esta espécie foi extinta, os avistamentos de Kabuto são aparentemente bastante
        comuns em alguns lugares.</p>
    </div>
    <div>
      <h1>141 - Kabutops</h1>
      <img src="images/kabutops.png" alt="kabutops">
      <p>Kabutops corta sua presa e suga os fluidos. As partes do corpo descartadas servem de alimento para outros
        Pokémon. A causa da extinção desta espécie é desconhecida. Kabutops eram Pokémon agressivos que habitavam mares
        quentes.</p>
    </div>
    <div>
      <h1>142 - Aerodactyl</h1>
      <img src="images/aerodactyl.png" alt="aerodactyl">
      <p>Este é um Pokémon feroz dos tempos antigos. Aparentemente, mesmo a tecnologia moderna é incapaz de produzir um
        espécime perfeitamente restaurado. Aerodactyl viu como se as presas pudessem despedaçar a pele – até mesmo a
        pele de Pokémon do tipo Aço.</p>
    </div>
    <div>
      <h1>143 - Snorlax</h1>
      <img src="images/snorlax.png" alt="snorlax">
      <p>Este Pokémon guloso come constantemente, exceto quando está dormindo. Ele devora quase 900 quilos de comida por
        dia. Os sucos digestivos do estômago podem dissolver qualquer tipo de veneno. Comer coisas do chão não incomoda
        em nada.</p>
    </div>
    <div>
      <h1>144 - Articuno</h1>
      <img src="images/articuno.png" alt="articuno">
      <p>Este lendário Pokémon pássaro pode criar nevascas ao congelar a umidade do ar. </p>
    </div>
    <div>
      <h1>145 - Zapdos</h1>
      <img src="images/zapdos.png" alt="zapdos">
      <p>Diz-se que este Pokémon lendário vive em nuvens de tempestade. Ele controla livremente os raios. </p>
    </div>
    <div>
      <h1>146 - Moltres</h1>
      <img src="images/moltres.png" alt="moltres">
      <p>É um dos lendários Pokémon pássaros. Diz-se que seu aparecimento indica a chegada da primavera.</p>
    </div>
    <div>
      <h1>147 - Dratini</h1>
      <img src="images/dratini.png" alt="dratini">
      <p>Ele perde muitas camadas de pele à medida que cresce. Durante esse processo, é protegido por uma rápida
        cachoeira. Para começar, nasce grande. Ele troca de pele repetidamente à medida que cresce continuamente.</p>
    </div>
    <div>
      <h1>148 - Dragonair</h1>
      <img src="images/dragonair.png" alt="dragonair">
      <p>Dizem que se emitir uma aura de todo o corpo, o clima começará a mudar instantaneamente. é chamado de Pokémon
        divino. Quando todo o seu corpo ilumina ligeiramente, o clima muda.</p>
    </div>
    <div>
      <h1>149 - Dragonite</h1>
      <img src="images/dragonite.png" alt="dragonite">
      <p>Diz-se que em algum lugar do oceano existe uma ilha onde estes se reúnem. Só eles moram lá. Ele pode voar
        apesar de seu físico grande e volumoso. Ele circunda o globo em apenas 16 horas.</p>
    </div>
    <div>
      <h1>150 - Mewtwo</h1>
      <img src="images/mewtwo.png" alt="mewtwo">
      <p>Seu DNA é quase igual ao de Mew. No entanto, seu tamanho e disposição são muito diferentes. </p>
    </div>
    <div>
      <h1>151 - Mew</h1>
      <img src="images/mew.png" alt="mew">
      <p>Quando visto através de um microscópio, o cabelo curto, fino e delicado deste Pokémon pode ser visto.</p>
    </div>
  </div>

  <footer>
    <div id="footer_content">
      <div id="footer_contacts">
        <img src="images/pokeball.jpg" alt="">
        <p> Já pensou em se tornar um treinador pokémon? <a href="form.php">Clique Aqui!</a></p>

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