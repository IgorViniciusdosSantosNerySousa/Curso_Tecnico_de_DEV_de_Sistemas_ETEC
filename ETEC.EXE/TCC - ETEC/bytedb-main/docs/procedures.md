## Procedures

### Procedures de criação de registros no banco de dados (INSERT):
| Nome da procedure | Descrição | Dados de entrada | Completo/Funcionando? |
| ----------------- | --------- | ---------------- | --------------------- |
| sp_CriarUsuario | Cria um novo usuário | username, email, password_ | Sim |
| sp_adicionarPost | Cria um novo post | title, text_, photo, assunto, idUser | Sim |
| sp_darLike | Cria um novo like | idPost, idUser | Sim |
| sp_seguirUsuario | Atribui um usuário como seguidor de outro usuário | id_perfil, id_seguidor | Sim |
| sp_darLikeComentario | Dá like em um comentário de um post | idUser, idComentario | Sim |
| sp_adicionarComentario | Adiciona um comentário em um post | idUser, idPost, text_, photo | Sim |

### Procedures de modificação de registros no banco de dados (UPDATE):
| Nome da procedure | Descrição | Dados de entrada | Completo/Funcionando? |
| ----------------- | --------- | ---------------- | --------------------- |
| sp_mudarFotoPerfil | Modifica a foto de perfil de um usuário (banner) | id, foto_perfil | Sim |
| sp_mudarFotoUsuario | Modifica a foto de perfil de um usuário | id, userPhoto_ | Sim |
| sp_mudarBio | Modifica a bio de um usuário | id, bio_ | Sim |
| sp_editarPost | Edita um post | idPost, title, text_, photo, assunto, idUser | Sim |
| sp_editarComentario | Edita um comentário | idComentario, text_, photo_, idUser | Sim |

### Procedures de consulta de registros no banco de dados (SELECT):
| Nome da procedure | Descrição | Dados de entrada | Completo/Funcionando? |
| ----------------- | --------- | ---------------- | --------------------- |
| sp_mostrarLikesPost | Mostra os likes de um post | idPost | Sim |
| sp_ListarPostsPorAssunto | Mostra os posts de acordo com ASSUNTO | assunto | Sim |
| sp_listarPostPesquisaEAssunto | Mostra os posts de acordo com ASSUNTO e CONTEÚDO | assunto, searchTerm | Sim |
| sp_listarUsuarios | Mostra todos os usuários ordenados de acordo com o id |  | Sim |
| sp_listarUsuariosLimit | Mostra todos os usuários ordenados de acordo com o id e limita os resultados | limit_ | Sim |
| sp_listarUsuariosPorNome | Mostra todos os usuários ordenados de acordo com o nome | nome | Sim |
| sp_verificarAdmin | Verifica se um usuário é admin | idUser | Sim |
| sp_obterIdUsuarioPorNome | Retorna o id de um usuário a partir do username | nome | Sim |
| sp_obterPostPorId | retorna um post com base em seu id, retorando o id do usuário que postou, o username, a foto do usuário, a foto do post, o titulo, o texto, o assunto, o código, o número de likes e o número de comentários | idPost | Sim |
| sp_obterComentariosPorIdPostLimit | Retorna uma lista de comentários com base em seu idPost, limitando os resultados | idPost, limit_ | Sim mas falta testar |
| sp_listarPostPesquisa | Pesquisa mostrando 100 primeiros caracteres, considerando titulo, assunto ou texto do post, mostrando assunto | pesquisa(1000) | Sim |
| sp_mostrarSeguidoresUsuario | mostra lista de usuários seguidores de um determinado usuário | id_usuario | Não (testes) |

### Procedures de exclusão de registros no banco de dados (DELETE):
| Nome da procedure | Descrição | Dados de entrada | Completo/Funcionando? |
| ----------------- | --------- | ---------------- | --------------------- |
| sp_removerLike | Remove um like | idPost, idUser | Sim |
| sp_removerPostUser | Remove um post (usuário apagando posts próprios) | idPost, idUser | Sim |
| sp_removerPostAdmin | Remove um post (admin apagando qualquer post) | idPost, idAdmin | Sim |
| sp_removerComentarioUser | Remove um comentário (usuário apagando comentários próprios) | idComentario, idUser | Sim |
| sp_removerComentarioAdmin | Remove um comentário (admin apagando qualquer comentário) | idComentario, idAdmin | Sim |
| sp_removerUsuario | Remove um usuário, para admins | idUserRemover, idUserAdmin | Sim |
| sp_removerPermissaoAdmin | Remove permissão de admin de um usuário | idUser | Sim |
| sp_darPermissaoAdmin | Dá permissão de admin a um usuário | idUser | Sim |
| sp_deixarSeguirUsuario | Remove um usuário como seguidor de outro usuário | id_perfil, id_seguidor | Sim |
| sp_apagarConta | Apaga a conta, todos posts, likes, lista de contas seguidas e comentários, reservado ao usuário | idUser | Sim |
| sp_removerLikeComentario | Remove o like de um comentário de um post | idUser, idComentario | Sim |