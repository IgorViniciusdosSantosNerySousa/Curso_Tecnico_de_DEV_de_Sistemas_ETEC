## Tabelas

### tb_user
Tabela de usuários da rede social byte
| Coluna | Tipo | Descrição | Pode ser nulo? |
| ------ | ---- | --------- | -------------- |
| idUser | INT UNSIGNED | Chave primária | Não |
| username | varchar(300) | Nome do usuário/nickname | Não |
| email | varchar(300) | E-Mail do usuário | Não |
| password_ | varchar(300) | Senha do usuário | Não |
| userPhoto | varchar(300) | Foto de perfil do usuário | Sim |
| profileImg | varchar(300) | Imagem de perfil do usuário | Sim |
| vocation | varchar(300) | Profissão do usuário | Sim |
| bio | varchar(300) | Biografia do usuário | Sim |
| isAdmin | BOOLEAN | Se o usuário é administrador | Sim |

### post
Tabela de posts da rede social byte
| Coluna | Tipo | Descrição | Pode ser nulo? |
| ------ | ---- | --------- | -------------- |
| id_post | INT UNSIGNED | Chave primária | Não |
| postTitle | varchar(300) | Título do post | Não |
| postText | varchar(5000) | Conteúdo do post | Não |
| postPhoto | varchar(300) | Foto do post | Sim |
| postDescription | varchar(512) | Descrição do post | Não |
| fk_idUser | INT UNSIGNED | Chave estrangeira para a tabela tb_user | Não |
| postDateTime | DATETIME | Representa o dia e hora que o post foi feito | Não |

### follower
Tabela de seguidores (novo)
| Coluna | Tipo | Descrição | Pode ser nulo? |
| ------ | ---- | --------- | -------------- |
| idSeguidor | int UNSIGNED | Chave primária | Não |
| fk_user_perfil | int UNSIGNED | id do usuário que vai ser seguido | Não |
| fk_user_seguidor | int UNSIGNED | id do usuário que vai seguir | Não |

### likes
Tabela de likes da rede social byte
| Coluna | Tipo | Descrição | Pode ser nulo? |
| ------ | ---- | --------- | -------------- |
| idLike | INT UNSIGNED | Chave primária | Não |
| fk_likePost | INT UNSIGNED | Chave estrangeira para a tabela post | Não |
| fk_idUser | INT UNSIGNED | Chave estrangeira para a tabela tb_user | Não |

### comentarios
Tabela de comentários da rede social byte
| Coluna | Tipo | Descrição | Pode ser nulo? |
| ------ | ---- | --------- | -------------- |
| id_comentario | INT UNSIGNED | Chave primária | Não |
| fk_idUser | INT UNSIGNED | Chave estrangeira para a tabela tb_user | Não |
| fk_id_post | INT UNSIGNED | Chave estrangeira para a tabela post | Não |
| textComent | varchar(300) | Texto do comentário | Não |
| imageComent | varchar(300) | Imagem do comentário | Sim |

### comentarios_like
Tabela de likes dos comentários
| Coluna | Tipo | Descrição | Pode ser nulo? |
| ------ | ---- | --------- | -------------- |
| idLike | INT UNSIGNED | chave primária | Não |
| fk_likeComment | INT UNSIGNED | chave estrangeira para o id do comentário | Não |
| fk_idUser | INT UNSIGNED | Chave estrangeira para o id do usuário que deu like | Não |

### report_posts
Tabela de listas de report em posts
| Coluna | Tipo | Descrição | Pode ser nulo? |
| ------ | ---- | --------- | -------------- |
| idReport | INT UNSIGNED | chave primária | Não|
| fk_userIdDenunciador | INT UNSIGNED | id do usuário denunciador | Não |
| fk_PostDenunciado | INT UNSIGNED | id do post denunciado | Não |
| motivo_denuncia | VARCHAR(150) | motivo em escrito da denuncia | Não |
| assuntoPost | VARCHAR(50) | assunto do post | Não |
| post_removido | boolean | determina se o post foi removido ou não pelos admins | Não |

### banned_users
Tabela de usuários banidos
| Coluna | Tipo | Descrição | Pode ser nulo? |
| ------ | ---- | --------- | -------------- |
| idBan | INT UNSIGNED | chave primária | Não|
| username | varchar(50) | username do banido | Não |
| fk_idAdminBanidor | int UNSIGNED | fk do id do admin que aplicou o ban | Não |
| dataDoBanimento | DATETIME | data e hora do banimento | Não |
| motivo_banimento | VARCHAR (300) | motivo em escrito do banimento | Não |

### report_user
Tabela de listas de report em users
| Coluna | Tipo | Descrição | Pode ser nulo? |
| ------ | ---- | --------- | -------------- |
| idReport | INT UNSIGNED | chave primária | Não|
| fk_userId_denunciado | int UNSIGNED | id do user denunciado | Não |
| motivo_denuncia | VARCHAR(300) | motivo em escrito da denuncia | Não |
| tipo_denuncia | VARCHAR(50) | o tipo de denuncia | Não |