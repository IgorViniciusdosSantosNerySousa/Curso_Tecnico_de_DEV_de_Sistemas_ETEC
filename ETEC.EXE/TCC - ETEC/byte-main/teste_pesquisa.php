<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa em Tempo Real</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Pesquisa em Tempo Real</h1>
    <input type="text" id="searchInput" placeholder="Digite sua pesquisa...">
    <div id="resultados"></div>

    <script>
        const searchInput = document.getElementById('searchInput');
        const resultadosDiv = document.getElementById('resultados');
        const apiUrl = 'teste_pesquisa_api.php?pesquisa=';

        searchInput.addEventListener('keydown', function() {
            const termoPesquisa = this.value;
            fetchResultados(termoPesquisa);
        });

        async function fetchResultados(termo) {
            const url = apiUrl + encodeURIComponent(termo);

            try {
                const response = await fetch(url);
                if (!response.ok) {
                    throw new Error(`Erro na requisição: ${response.status}`);
                }
                const data = await response.json();
                exibirResultados(data);
            } catch (error) {
                resultadosDiv.innerHTML = `<p>Erro ao buscar dados: ${error.message}</p>`;
                console.error("Erro ao buscar dados:", error);
            }
        }

        function exibirResultados(resultados) {
            resultadosDiv.innerHTML = ''; // Limpa os resultados anteriores

            if (resultados && resultados.length > 0) {
                const tabelaPosts = document.createElement('table');
                let theadPosts = tabelaPosts.createTHead();
                let rowHeadPosts = theadPosts.insertRow();
                rowHeadPosts.insertCell().textContent = 'Título';
                rowHeadPosts.insertCell().textContent = 'Resumo';
                rowHeadPosts.insertCell().textContent = 'Usuário';
                rowHeadPosts.insertCell().textContent = 'ID Usuário';
                rowHeadPosts.insertCell().textContent = 'Foto Usuário';
                rowHeadPosts.insertCell().textContent = 'Foto Post';
                rowHeadPosts.insertCell().textContent = 'Tags';
                rowHeadPosts.insertCell().textContent = 'Data/Hora';
                rowHeadPosts.insertCell().textContent = 'Likes';
                rowHeadPosts.insertCell().textContent = 'Comentários';
                let tbodyPosts = tabelaPosts.createTBody();

                const tabelaUsuarios = document.createElement('table');
                let theadUsuarios = tabelaUsuarios.createTHead();
                let rowHeadUsuarios = theadUsuarios.insertRow();
                rowHeadUsuarios.insertCell().textContent = 'Nome Usuário';
                rowHeadUsuarios.insertCell().textContent = 'ID Usuário';
                rowHeadUsuarios.insertCell().textContent = 'Foto Usuário';
                let tbodyUsuarios = tabelaUsuarios.createTBody();
                const usuariosUnicos = {};

                resultados.forEach(item => {
                    // Tabela de Posts
                    let rowPost = tbodyPosts.insertRow();
                    rowPost.insertCell().textContent = item.titulo;
                    rowPost.insertCell().textContent = item.resumo;
                    rowPost.insertCell().textContent = item.nome_usuario;
                    rowPost.insertCell().textContent = item.id_usuario;
                    rowPost.insertCell().innerHTML = item.foto_usuario ? `<img src="${item.foto_usuario}" alt="Foto do Usuário" style="max-width: 100px; max-height: 100px;">` : 'N/A';
                    rowPost.insertCell().innerHTML = item.foto_post ? `<img src="${item.foto_post}" alt="Foto do Post" style="max-width: 100px; max-height: 100px;">` : 'N/A';
                    rowPost.insertCell().textContent = item.tags;
                    rowPost.insertCell().textContent = item.pDateTime;
                    rowPost.insertCell().textContent = item.quantLikes;
                    rowPost.insertCell().textContent = item.quantComentarios;

                    // Tabela de Usuários (evitando duplicatas)
                    if (!usuariosUnicos[item.id_usuario]) {
                        let rowUsuario = tbodyUsuarios.insertRow();
                        rowUsuario.insertCell().textContent = item.nome_usuario;
                        rowUsuario.insertCell().textContent = item.id_usuario;
                        rowUsuario.insertCell().textContent = item.foto_usuario || 'N/A';
                        usuariosUnicos[item.id_usuario] = true;
                    }
                });

                resultadosDiv.appendChild(document.createElement('h2')).textContent = 'Resultados da Pesquisa (Posts)';
                resultadosDiv.appendChild(tabelaPosts);
                resultadosDiv.appendChild(document.createElement('h2')).textContent = 'Usuários Encontrados';
                resultadosDiv.appendChild(tabelaUsuarios);

            } else {
                resultadosDiv.innerHTML = '<p>Nenhum resultado encontrado.</p>';
            }
        }

        // Carrega todos os resultados ao carregar a página (opcional)
        fetchResultados('');
    </script>
</body>
</html>