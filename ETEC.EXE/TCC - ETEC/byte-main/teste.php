<?php

require_once "backend.php";
require_once "arrayparahtml.php";

$voltar = "<a href=./teste.php>voltar</a><br>";

if ( isset($_GET["teste"]) ) {
    $x = $_GET["teste"];

    if ($x === "checarlogin") {
        echo $voltar;
        echo "<p>se retornar false o usuário não existe, se retornar true ele existe:</p>";
        echo var_dump( checarUsuarioLogin("admin@gmail.com", "12345678") );
    }
    if ($x === "cadastro") {
        echo $voltar;
        if ( !checarUsuarioLogin("admin@gmail.com", "12345678") === true ) {
            echo cadastrarUsuario("admin", "admin@gmail.com", "12345678");
        } else {
            echo "<p>o usuário admin com a senha 12345678 já foi cadastrado e não pode ser cadastrado mais de 1 vez</p>";
        }

    }
    if ($x === "puxarusuario") {
        echo puxarUsuario("admin@gmail.com");
    }
    if ($x === "checaruser") {
        echo $voltar;
        echo "<p>se retornar false o usuário não existe, se retornar true ele existe:</p>";
        echo var_dump( checarUsuarioExiste("admin", "admin@gmail.com") );
    }
    if ($x === "listarusuarios") {
        $users = mostrarUsuarios();
        foreach ($users as $user) {
            $id = $user['id_users'];
            $username = $user['userName'];
            $email = $user['email'];
            echo "Usuário id: $id<br>E-mail: $email<br>Username: $username<br><hr>";
        }
    }

    if ($x === "teste_backend_inserir") {
        cadastrarUsuario("lucas", "lucas@gmail.com", "12345678");
        cadastrarUsuario("maria", "maria@gmail.com", "12345678");
        cadastrarUsuario("tiago", "tiago@gmail.com", "12345678");
        cadastrarUsuario("jeff",  "jeff@gmail.com",  "12345678");

        mudarFotoPerfil(1, "foto_perfil_user1.png");
        mudarFotoPerfil(2, "foto_perfil_user1.png");
        mudarFotoPerfil(3, "foto_perfil_user1.png");
        mudarFotoPerfil(4, "foto_perfil_user1.png");

        mudarFotoUsuario(1, "foto_user1.png");
        mudarFotoUsuario(2, "foto_user2.png");
        mudarFotoUsuario(3, "foto_user3.png");
        mudarFotoUsuario(4, "foto_user4.png");

        criarPost(1, "Teste Inicial", "Conteúdo do primeiro post.", "imagem_inicial.jpg", "Descrição da postagem inicial");
        criarPost(2, "Segundo Teste", "Este é o conteúdo do segundo post.", "foto_exemplo.gif", "Detalhes sobre o segundo teste");
        criarPost(3, "Terceiro Postagem", "Texto da terceira postagem aqui.", "banner_promo.png", "Informações sobre a terceira postagem");
        criarPost(4, "Quarto Exemplo", "Conteúdo para o quarto exemplo.", "icone_novo.svg", "Descrição do quarto exemplo");
        criarPost(1, "Mais um Teste com ID 1", "Repetindo o ID 1 com outro conteúdo.", "imagem_diversa.jpeg", "Outra descrição para ID 1");
        criarPost(2, "Outro Teste com ID 2", "Conteúdo diferente para o ID 2.", "animacao.mp4", "Descrição alternativa para ID 2");
        criarPost(3, "ID 3 Novamente", "Mais conteúdo para o ID 3.", "fundo_abstrato.png", "Outra descrição para ID 3");
        criarPost(4, "Repetição do ID 4", "Conteúdo adicional para o ID 4.", "logo_marca.png", "Descrição extra para ID 4");
        criarPost(1, "Último Teste com ID 1", "Finalizando os exemplos com ID 1.", "foto_final.bmp", "Descrição final para ID 1");
        criarPost(2, "Finalizando com ID 2", "O último exemplo com ID 2.", "video_tutorial.avi", "Descrição do último exemplo com ID 2");

        darLikePost(1, 1);
        darLikePost(1, 2);
        darLikePost(1, 3);
        darLikePost(1, 4);

        darLikePost(2, 1);
        darLikePost(2, 2);
        darLikePost(2, 3);
        darLikePost(2, 4);

        darLikePost(3, 1);
        darLikePost(3, 2);

        darLikePost(4, 1);
        darLikePost(4, 2);
        darLikePost(4, 3);

        darLikePost(5, 1);
        darLikePost(5, 2);
        darLikePost(5, 3);
        darLikePost(5, 4);

        darLikePost(6, 1);
        darLikePost(6, 2);
        darLikePost(6, 3);

        darLikePost(7, 1);
        darLikePost(7, 2);

        darLikePost(8, 1);
        darLikePost(8, 2);

        darLikePost(9, 1);
        darLikePost(9, 2);
        darLikePost(9, 3);
        darLikePost(9, 4);

        darLikePost(10, 1);
        darLikePost(10, 2);

        seguirUsuario(1, 2);
        seguirUsuario(1, 3);
        seguirUsuario(1, 4);

        seguirUsuario(2, 1);
        seguirUsuario(2, 3);

        seguirUsuario(3, 2);

        seguirUsuario(4, 2);
        seguirUsuario(4, 1);
        seguirUsuario(4, 3);

        adicionarTagAoPost(1, 1);
        adicionarTagAoPost(1, 2);
        adicionarTagAoPost(1, 3);
        adicionarTagAoPost(1, 4);
        adicionarTagAoPost(1, 5);

        adicionarTagAoPost(2, 12);
        adicionarTagAoPost(2, 23);
        adicionarTagAoPost(2, 7);

        adicionarTagAoPost(3, 8);
        adicionarTagAoPost(3, 9);
        adicionarTagAoPost(3, 11);
        
        adicionarTagAoPost(4, 30);
        adicionarTagAoPost(4, 14);
        adicionarTagAoPost(4, 15);

        adicionarTagAoPost(5, 17);
        adicionarTagAoPost(5, 19);
        adicionarTagAoPost(5, 26);

        adicionarTagAoPost(6, 32);
        adicionarTagAoPost(6, 31);
        adicionarTagAoPost(6, 23);

        adicionarTagAoPost(7, 31);
        adicionarTagAoPost(7, 4);
        adicionarTagAoPost(7, 7);

        adicionarTagAoPost(8, 3);
        adicionarTagAoPost(8, 16);
        adicionarTagAoPost(8, 28);

        adicionarTagAoPost(9, 18);
        adicionarTagAoPost(9, 14);
        adicionarTagAoPost(9, 24);

        adicionarTagAoPost(10, 1);
        adicionarTagAoPost(10, 2);
        adicionarTagAoPost(10, 5);
    }

    if ($x === "teste_backend_consultar") {
        //var_dump(mostrarSeguidoresUsuario(1));
        //var_dump(mostrarSeguidoresUsuario(2));
        //var_dump(mostrarSeguidoresUsuario(3));
        //var_dump(mostrarSeguidoresUsuario(4));

        echo arrayParaTabelaHtml(carregarUsuários());
        echo arrayParaTabelaHtml(carregarNumLikes(1));
        echo arrayParaTabelaHtml(carregarNumLikes(2));
        echo arrayParaTabelaHtml(carregarNumLikes(3));
        echo arrayParaTabelaHtml(carregarNumLikes(4));
        echo arrayParaTabelaHtml(carregarNumLikes(5));
        echo arrayParaTabelaHtml(carregarNumLikes(6));
        echo arrayParaTabelaHtml(carregarNumLikes(7));
        echo arrayParaTabelaHtml(carregarNumLikes(8));
        echo arrayParaTabelaHtml(carregarNumLikes(9));
        echo arrayParaTabelaHtml(carregarNumLikes(10));
        echo arrayParaTabelaHtml(retornarListaTags());

    }

    if ($x === "adicionar_tags") {
        adicionarTags("JavaScript");
        adicionarTags("C++");
        adicionarTags("HTML+CSS");
        adicionarTags("Python");
        adicionarTags("Java");
        adicionarTags("C");
        adicionarTags("Ruby");
        adicionarTags("Swift");
        adicionarTags("Go");
        adicionarTags("Rust");
        adicionarTags("Kotlin");
        adicionarTags("TypeScript");
        adicionarTags("Perl");
        adicionarTags("Lua");
        adicionarTags("Dart");
        adicionarTags("R");
        adicionarTags("Scala");
        adicionarTags("C#");
        adicionarTags("Objective-C");
        adicionarTags("Haskell");
        adicionarTags("Elixir");
        adicionarTags("Shell");
        adicionarTags("SQL");
        adicionarTags("MATLAB");
        adicionarTags("Julia");
        adicionarTags("Assembly");
        adicionarTags("VBScript");
        adicionarTags("F#");
        adicionarTags("VHDL");
        adicionarTags("Prolog");
        adicionarTags("Erlang");
        adicionarTags("Lisp");
    }

} else {
    $links = [
        "cadastro",
        "login",
        "checarlogin",
        "validarformulario",
        "checaruser",
        "puxarusuario",
        "listarusuarios",
        "teste_backend_inserir",
        "teste_backend_consultar",
        "adicionar_tags"
    ];
    echo "<h3>Links para testes de funções do servidor</h3>";
    foreach ($links as $link) {
        echo "<a href=./teste.php?teste=$link>$link</a><br>";
    }
}