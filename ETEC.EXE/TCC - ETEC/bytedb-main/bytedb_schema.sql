-- aviso: banco feito para MySQL, não compatível com MariaDB ou SQL Server!
-- copie e cole no PHPMyAdmin e rode o código

CREATE DATABASE IF NOT EXISTS bd_Byte;

USE bd_Byte;

-- mudei "password" pra "password_" com underline já que "password" é palavra reservada
-- adicionei o "isAdmin" pra diferenciar se o usuário é ou não administrador
CREATE TABLE IF NOT EXISTS tb_user (
  idUser INT UNSIGNED not null AUTO_INCREMENT,
  userName varchar(300) NOT NULL,
  email varchar(300) NOT NULL,
  password_ varchar(300) NOT NULL,
  userPhoto varchar(300),
  profileImg varchar(300),
  vocation varchar(300),
  bio varchar (300),
  isAdmin boolean,
  PRIMARY KEY (idUser)
);

CREATE TABLE IF NOT EXISTS post (
  id_post INT UNSIGNED NOT NULL AUTO_INCREMENT,
  postTitle varchar(300) NOT NULL,
  postText varchar(5000) NOT NULL,
  postPhoto varchar(300),
  postAssunto varchar(50) NOT NULL,
  fk_idUser INT UNSIGNED not null,
  postDateTime DATETIME NOT NULL,
  FOREIGN KEY (fk_idUser) REFERENCES tb_user(idUser),
  PRIMARY KEY (id_post)
);

-- modificações que fiz na tabela likes:
-- primeiro, eu adicionei o id do usuário que deu o like para a contabilização ser feita como chave estrangeira
-- segundo, eu coloquei o id do post como chave estrangeira
-- terceiro, eu removi o quantLikeComent pois a contabilização é calculada pelo select usando COUNT

CREATE TABLE IF NOT EXISTS likes (
  idLike INT UNSIGNED NOT NULL AUTO_INCREMENT,
  fk_likePost INT UNSIGNED NOT NULL,
  fk_idUser INT UNSIGNED NOT NULL,
  PRIMARY KEY (idLike),
  FOREIGN KEY (fk_likePost) REFERENCES post(id_post),
  FOREIGN KEY (fk_idUser) REFERENCES tb_user(idUser)
);

-- modificações que fiz na tabela comentários:
-- eu coloquei o foreign key de post e usuário, pois cada comentário é feito por um usuário direcionado à um post

CREATE TABLE IF NOT EXISTS comentarios (
  id_comentario INT UNSIGNED NOT NULL AUTO_INCREMENT,
  fk_idUser INT UNSIGNED NOT NULL,
  fk_id_post INT UNSIGNED NOT NULL,
  textComent varchar(5000) NOT NULL,
  imageComent varchar(300),
  commentDateTime DATETIME NOT NULL,
  PRIMARY KEY (id_comentario),
  FOREIGN KEY (fk_id_post) REFERENCES post(id_post),
  FOREIGN KEY (fk_idUser) REFERENCES tb_user(idUser)
);

CREATE TABLE IF NOT EXISTS comentarios_like (
  idLike INT UNSIGNED NOT NULL AUTO_INCREMENT,
  fk_likeComment INT UNSIGNED NOT NULL,
  fk_idUser INT UNSIGNED NOT NULL,
  PRIMARY KEY (idLike),
  FOREIGN KEY (fk_likeComment) REFERENCES comentarios(id_comentario),
  FOREIGN KEY (fk_idUser) REFERENCES tb_user(idUser)
);

CREATE TABLE IF NOT EXISTS follower (
  idSeguidor int UNSIGNED NOT NULL AUTO_INCREMENT,
  fk_user_perfil int UNSIGNED NOT NULL,
  fk_user_seguidor int UNSIGNED NOT NULL,
  PRIMARY KEY (idSeguidor),
  FOREIGN KEY (fk_user_perfil) REFERENCES tb_user(idUser),
  FOREIGN KEY (fk_user_seguidor) REFERENCES tb_user(idUser)
);

-- tabelas para sistema de reports de posts:
CREATE TABLE IF NOT EXISTS report_posts (
  idReport int UNSIGNED not null AUTO_INCREMENT,
  fk_userIdDenunciador int UNSIGNED not null,
  fk_PostDenunciado int UNSIGNED not null,
  motivo_denuncia VARCHAR(150) not null,
  assuntoPost VARCHAR (50) not null,
  post_removido boolean not null,
  PRIMARY KEY (idReport),
  FOREIGN KEY (fk_userIdDenunciador) REFERENCES tb_user(idUser),
  FOREIGN KEY (fk_PostDenunciado) REFERENCES post(id_post)
);

CREATE TABLE IF NOT EXISTS banned_users (
  idBan int UNSIGNED not null AUTO_INCREMENT,
  username varchar(50) not null,
  dataDoBanimento DATETIME not null,
  fk_idAdminBanidor int UNSIGNED not null,
  motivo_banimento VARCHAR (300) not null,
  PRIMARY KEY (idBan),
  FOREIGN KEY (fk_idAdminBanidor) REFERENCES tb_user(idUser)
);

CREATE TABLE IF NOT EXISTS report_user(
  idReport int UNSIGNED not null AUTO_INCREMENT,
  fk_userId_denunciado int UNSIGNED not null,
  motivo_denuncia VARCHAR(300) not null,
  tipo_denuncia VARCHAR(50) not null,
  PRIMARY KEY (idReport),
  FOREIGN KEY (fk_userId_denunciado) REFERENCES tb_user(idUser)
);

-- STORED PROCEDURES para as ações do backend:
-- (os underlines a mais são pra diferenciar o nome das colunas das variáveis dos procedures)

-- seguir perfil:
DELIMITER @@
CREATE PROCEDURE sp_seguirUsuario(
  IN id_perfil INT UNSIGNED,
  IN id_seguidor INT UNSIGNED
)
BEGIN
  INSERT INTO follower (fk_user_perfil, fk_user_seguidor)
  VALUES (id_perfil, id_seguidor);
END @@
DELIMITER ;

-- deixar de seguir usuário
DELIMITER @@
CREATE PROCEDURE sp_deixarSeguirUsuario(
  IN id_perfil INT UNSIGNED,
  IN id_seguidor INT UNSIGNED
)
BEGIN
  DELETE FROM follower 
  WHERE fk_user_perfil = id_perfil 
  AND fk_user_seguidor = id_seguidor;
END @@
DELIMITER ;

-- mostrar usuários da lista de seguidores de um usuário:

DELIMITER @@
CREATE PROCEDURE sp_mostrarSeguidoresUsuario(
  IN id_usuario INT UNSIGNED
)
BEGIN
  SELECT username, userPhoto, profileImg, vocation, bio, (SELECT COUNT(*) FROM follower WHERE fk_user_perfil = tb_user.idUser)
  FROM tb_user
  WHERE idUser = (SELECT fk_user_seguidor FROM follower WHERE fk_user_perfil = tb_user.idUser)
  ORDER BY idUser;
END @@
DELIMITER ;

-- criação de usuário
DELIMITER @@
CREATE PROCEDURE sp_CriarUsuario(
  IN username VARCHAR(300),
  IN email_ VARCHAR(300),
  IN password__ VARCHAR(300)
)
BEGIN
  INSERT INTO tb_user (userName, email, password_, isAdmin)
  VALUES (username, email_, password__, 0);
END @@
DELIMITER ;
-- exemplo
-- CALL sp_CriarUsuario('João', 'joao@email.com', '12345678');

-- adicionar/mudar foto de PERFIL de usuário já existente:
DELIMITER @@
CREATE PROCEDURE sp_mudarFotoPerfil(
  IN id INT UNSIGNED,
  IN foto_perfil VARCHAR(300)
)
BEGIN
  UPDATE tb_user
  SET profileImg = foto_perfil
  WHERE idUser = id;
END @@
DELIMITER ;

-- adicionar foto de usuário já existente:
DELIMITER @@
CREATE PROCEDURE sp_mudarFotoUsuario(
  IN id INT UNSIGNED,
  IN userPhoto_ VARCHAR(300)
)
BEGIN
  UPDATE tb_user
  SET userPhoto = userPhoto_
  WHERE idUser = id;
END @@
DELIMITER ;

-- adicionar bio de usuário já existente:
DELIMITER @@
CREATE PROCEDURE sp_mudarBio(
  IN id INT UNSIGNED,
  IN bio_ VARCHAR(300)
)
BEGIN
  UPDATE tb_user
  SET bio = bio_
  WHERE idUser = id;
END @@
DELIMITER ;

-- criar posts:
DELIMITER @@
CREATE PROCEDURE sp_adicionarPost(
  IN title VARCHAR(300),
  IN text_ VARCHAR(3000),
  IN photo VARCHAR(300),
  IN assunto VARCHAR(500),
  IN idUser INT UNSIGNED
)
BEGIN
  INSERT INTO post (postTitle, postText, postPhoto, postAssunto, fk_idUser, postDateTime)
  VALUES (title, text_, photo, assunto, idUser, NOW());
END @@
DELIMITER ;


-- dar like nos posts:
DELIMITER @@
CREATE PROCEDURE sp_darLike(
  IN idPost INT UNSIGNED,
  IN idUser INT UNSIGNED
)
BEGIN
  INSERT INTO likes (fk_likePost, fk_idUser)
  VALUES (idPost, idUser);
END @@
DELIMITER ;

-- remover o like dos posts:
DELIMITER @@
CREATE PROCEDURE sp_removerLike(
  IN idPost INT UNSIGNED,
  IN idUser INT UNSIGNED
)
BEGIN
  DELETE FROM likes
  WHERE fk_likePost = idPost AND fk_idUser = idUser;
END @@
DELIMITER ;

-- remover post (função para o usuário remover seu próprio post):
DELIMITER @@
CREATE PROCEDURE sp_removerPostUser(
  IN idPost INT UNSIGNED,
  IN idUser INT UNSIGNED
)
BEGIN
  DELETE FROM post
  WHERE id_post = idPost AND fk_idUser = idUser;
END @@
DELIMITER ;

-- remover post (funçao pra admin que pode remover qualquer post):
DELIMITER @@
CREATE PROCEDURE sp_removerPostAdmin(
  IN idPost INT UNSIGNED,
  IN idAdmin INT UNSIGNED
)
BEGIN
  -- remove APENAS SE isAdmin foi verdadeiro:
  IF (SELECT isAdmin FROM tb_user WHERE idUser = idAdmin) = TRUE THEN
    DELETE FROM post
    WHERE id_post = idPost;
  END IF;
END @@
DELIMITER ;

-- remover comentário (função para o usuário remover seu próprio comentário):
DELIMITER @@
CREATE PROCEDURE sp_removerComentarioUser(
  IN idComentario INT UNSIGNED,
  IN idUser INT UNSIGNED
)
BEGIN
  DELETE FROM comentarios
  WHERE id_comentario = idComentario AND fk_idUser = idUser;
END @@
DELIMITER ;

-- remover comentário  (funçao pra admin que pode remover qualquer comentário):
DELIMITER @@
CREATE PROCEDURE sp_removerComentarioAdmin(
  IN idComentario INT UNSIGNED,
  IN idUser INT UNSIGNED
)
BEGIN
  -- remove APENAS SE isAdmin foi verdadeiro:
    IF (SELECT isAdmin FROM tb_user WHERE idUser = idUser) = TRUE THEN
    DELETE FROM comentarios
    WHERE id_comentario = idComentario;
  END IF;
END @@
DELIMITER ;

-- editar post:
DELIMITER @@
CREATE PROCEDURE sp_editarPost(
  IN idPost INT UNSIGNED,
  IN title VARCHAR(300),
  IN text_ VARCHAR(300),
  IN photo VARCHAR(300),
  IN postAssunto VARCHAR(300),
  IN idUser INT UNSIGNED
)
BEGIN
  UPDATE post
  SET postTitle = title, postText = text_, postPhoto = photo, postAssunto = postAssunto
  WHERE id_post = idPost AND fk_idUser = idUser;
END @@
DELIMITER ;

-- editar comentário:
DELIMITER @@
CREATE PROCEDURE sp_editarComentario(
  IN idComentario INT UNSIGNED,
  IN text_ VARCHAR(5000),
  IN photo VARCHAR(300),
  IN idUser INT UNSIGNED
)
BEGIN
  UPDATE comentarios
  SET textComent = text_, imageComent = photo
  WHERE id_comentario = idComentario AND fk_idUser = idUser;
END @@
DELIMITER ;

-- mostrar numeros de likes de post:
DELIMITER @@
CREATE PROCEDURE sp_mostrarLikesPost (
  IN idPost INT UNSIGNED
)
BEGIN
  SELECT COUNT(*) AS quantLikes
  FROM likes
  WHERE fk_likePost = idPost;
END @@
DELIMITER ;

-- listas posts considerando conteudo do titulo, descrição ou texto do post
DELIMITER @@
CREATE PROCEDURE sp_listarPostPesquisa(IN pesquisa VARCHAR(1000))
BEGIN
    SELECT 
    p.postTitle AS titulo, 
    SUBSTRING(p.postText, 1, 150) AS resumo, 
    u.userName AS nome_usuario, 
    u.idUser AS id_usuario, 
    u.userPhoto AS foto_usuario, 
    p.postPhoto AS foto_post,
    p.postDateTime AS pDateTime,
    p.postAssunto AS pAssunto,
    (SELECT COUNT(*) FROM likes WHERE fk_likePost = p.id_post) AS quantLikes,
    (SELECT COUNT(*) FROM comentarios WHERE fk_id_post = p.id_post) AS quantComentarios
    FROM post p
    JOIN tb_user u ON p.fk_idUser = u.idUser
    WHERE p.postTitle LIKE CONCAT('%', pesquisa, '%')
    OR p.postText LIKE CONCAT('%', pesquisa, '%')
    OR p.postAssunto LIKE CONCAT('%', pesquisa, '%')
    ORDER BY p.postDateTime DESC;
END @@
DELIMITER ;

-- listar posts POR ASSUNTO
DELIMITER @@
CREATE PROCEDURE sp_ListarPostsPorAssunto(IN assunto VARCHAR(50))
BEGIN
    SELECT
    p.postTitle AS titulo, 
    SUBSTRING(p.postText, 1, 150) AS resumo, 
    u.userName AS nome_usuario,
    u.idUser AS id_usuario,
    u.userPhoto AS foto_usuario,
    p.postPhoto AS foto_post,
    p.postDateTime AS pDateTime,
    p.postAssunto AS pAssunto,
    (SELECT COUNT(*) FROM likes WHERE fk_likePost = p.id_post) AS quantLikes,
    (SELECT COUNT(*) FROM comentarios WHERE fk_id_post = p.id_post) AS quantComentarios
    FROM post p
    JOIN tb_user u ON p.fk_idUser = u.idUser
    WHERE p.postAssunto = assunto
    ORDER BY p.postDateTime DESC;
END @@

DELIMITER ;

-- listas posts considerando conteudo do titulo, descrição ou texto do post E ASSUNTO
DELIMITER @@
CREATE PROCEDURE sp_listarPostPesquisaEAssunto(IN pesquisa VARCHAR(1000), IN assunto VARCHAR(50))
BEGIN
    SELECT 
    p.postTitle AS titulo, 
    SUBSTRING(p.postText, 1, 150) AS resumo, 
    u.userName AS nome_usuario, 
    u.idUser AS id_usuario, 
    u.userPhoto AS foto_usuario, 
    p.postPhoto AS foto_post,
    p.postDateTime AS pDateTime,
    p.postAssunto AS pAssunto,
    (SELECT COUNT(*) FROM likes WHERE fk_likePost = p.id_post) AS quantLikes,
    (SELECT COUNT(*) FROM comentarios WHERE fk_id_post = p.id_post) AS quantComentarios
    FROM post p
    JOIN tb_user u ON p.fk_idUser = u.idUser
    WHERE p.postTitle LIKE CONCAT('%', pesquisa, '%')
    OR p.postText LIKE CONCAT('%', pesquisa, '%')
    OR p.postAssunto LIKE CONCAT('%', pesquisa, '%')
    AND p.postAssunto = assunto
    ORDER BY p.postDateTime DESC;
END @@
DELIMITER ;

-- listar usuários:
DELIMITER @@
CREATE PROCEDURE sp_listarUsuarios()
BEGIN
  SELECT username, userPhoto, profileImg, vocation, bio, (SELECT COUNT(*) FROM follower WHERE fk_user_perfil = tb_user.idUser) AS followers
  FROM tb_user ORDER BY idUser ASC;
END @@
DELIMITER ;

-- listar usuários porém com um numero X de limite de usuários a serem listados:
DELIMITER @@
CREATE PROCEDURE sp_listarUsuariosLimit(IN limit_ INT UNSIGNED)
BEGIN
    SELECT username, userPhoto, profileImg, vocation, bio, (SELECT COUNT(*) FROM follower WHERE fk_user_perfil = tb_user.idUser) AS followers
     FROM tb_user ORDER BY idUser ASC LIMIT limit_;
END @@
DELIMITER ;

-- listar usuários conforme o username deles:
DELIMITER @@
CREATE PROCEDURE sp_listarUsuariosPorNome(IN nome VARCHAR(300))
BEGIN
  SELECT username, userPhoto, profileImg, vocation, bio, (SELECT COUNT(*) FROM follower WHERE fk_user_perfil = tb_user.idUser) AS followers
   FROM tb_user WHERE userName LIKE CONCAT(nome, '%') ORDER BY idUser ASC;
END @@
DELIMITER ;

-- apagar conta, reservado aos usuários
DELIMITER @@
CREATE PROCEDURE sp_apagarConta(
  IN idUser INT UNSIGNED
)
BEGIN
  -- deletar os likes dos posts que pertencem ao usuário a ser apagado
  DELETE l FROM likes l
  JOIN post p ON l.fk_likePost = p.id_post
  WHERE p.fk_idUser = idUser;

  -- deletar os likes dos comentários que pertencem aos posts do usuário a ser apagado
  DELETE cl FROM comentarios_like cl
  JOIN comentarios c ON cl.fk_likeComment = c.id_comentario
  JOIN post p ON c.fk_id_post = p.id_post
  WHERE p.fk_idUser = idUser;

  -- deletar os likes:
  DELETE FROM likes
  WHERE fk_idUser = idUser;

  -- deletar os posts
  DELETE FROM post
  WHERE fk_idUser = idUser;

  -- deletar comentários em posts criados pelo usuário
  DELETE c FROM comentarios c
  JOIN post p ON c.fk_id_post = p.id_post
  WHERE p.fk_idUser = idUser;

  -- deletar os likes dos comentários:
  DELETE FROM comentarios_like
  WHERE fk_idUser = idUser;

  -- deletar os comentários:
  DELETE FROM comentarios
  WHERE fk_idUser = idUser;

  -- remover seguidas
  DELETE FROM follower
  WHERE fk_user_seguidor = idUser;

  -- remover seguidas onde o usuário está sendo seguido
  DELETE FROM follower
  WHERE fk_user_perfil = idUser;

  -- por fim deletar o usuário
  DELETE FROM tb_user
  WHERE idUser = idUser;
END @@
DELIMITER ;

-- remover usuário, seus posts, seus comentários e seus likes (apenas admins podem):
DELIMITER @@
CREATE PROCEDURE sp_removerUsuario(
  IN idUserRemover INT UNSIGNED,
  IN idUserAdmin INT UNSIGNED
)
BEGIN
  IF (SELECT isAdmin FROM tb_user WHERE idUser = idUserAdmin) = TRUE THEN
    -- deletar os likes dos posts que pertencem ao usuário a ser apagado
    DELETE l FROM likes l
    JOIN post p ON l.fk_likePost = p.id_post
    WHERE p.fk_idUser = idUserRemover;

    -- deletar os likes dos comentários que pertencem aos posts do usuário a ser apagado
    DELETE cl FROM comentarios_like cl
    JOIN comentarios c ON cl.fk_likeComment = c.id_comentario
    JOIN post p ON c.fk_id_post = p.id_post
    WHERE p.fk_idUser = idUserRemover;

    -- deletar os likes:
    DELETE FROM likes
    WHERE fk_idUser = idUserRemover;

    -- deletar os posts
    DELETE FROM post
    WHERE fk_idUser = idUserRemover;

    -- deletar comentários em posts criados pelo usuário
    DELETE c FROM comentarios c
    JOIN post p ON c.fk_id_post = p.id_post
    WHERE p.fk_idUser = idUserRemover;

    -- deletar os likes dos comentários:
    DELETE FROM comentarios_like
    WHERE fk_idUser = idUserRemover;

    -- deletar os comentários:
    DELETE FROM comentarios
    WHERE fk_idUser = idUserRemover;

    -- remover seguidas
    DELETE FROM follower
    WHERE fk_user_seguidor = idUserRemover;

    -- remover seguidas onde o usuário está sendo seguido
    DELETE FROM follower
    WHERE fk_user_perfil = idUserRemover;

    -- por fim deletar o usuário
    DELETE FROM tb_user
    WHERE idUser = idUserRemover;
  END IF;
END @@
DELIMITER ;

-- remover permissão de admin de usuário:
DELIMITER @@
CREATE PROCEDURE sp_removerPermissaoAdmin(
  IN idUser INT UNSIGNED
)
BEGIN
  UPDATE tb_user
  SET isAdmin = FALSE
  WHERE idUser = idUser;
END @@
DELIMITER ;

-- dar permissão de admin de usuário:
DELIMITER @@
CREATE PROCEDURE sp_darPermissaoAdmin(
  IN idUser INT UNSIGNED
)
BEGIN
  UPDATE tb_user
  SET isAdmin = TRUE
  WHERE idUser = idUser;
END @@
DELIMITER ;

-- verificar se usuário é admin, se sim retornar TRUE, senão retornar FALSE:
DELIMITER @@
CREATE PROCEDURE sp_verificarAdmin(
  IN idUser INT UNSIGNED
)
BEGIN
  SELECT isAdmin FROM tb_user WHERE idUser = idUser;
END @@
DELIMITER ;

-- ter acesso ao id de um usuário com base em seu username:
DELIMITER @@
CREATE PROCEDURE sp_obterIdUsuarioPorNome(IN nome VARCHAR(300))
BEGIN
  SELECT idUser FROM tb_user WHERE userName = nome;
END @@
DELIMITER ;

-- retornar um post com base em seu id, retorando o id do usuário que postou, o username, a foto do usuário, a foto do post, o titulo, o texto, a descrição, o código, o número de likes e o número de comentários:
DELIMITER @@
CREATE PROCEDURE sp_obterPostPorId(IN idPost INT UNSIGNED)
BEGIN
  SELECT
    p.id_post AS id_post,
    p.postTitle AS postTitle,
    p.postText AS postText,
    p.postPhoto AS postPhoto,
    p.postAssunto AS postAssunto,
    p.postDateTime AS postDateTime,
    u.idUser AS idUser,
    u.userName AS userName,
    u.userPhoto AS userPhoto,
    (SELECT COUNT(*) FROM likes WHERE fk_likePost = p.id_post) AS quantLikes,
    (SELECT COUNT(*) FROM comentarios WHERE fk_id_post = p.id_post) AS quantComentarios
  FROM post p
  JOIN tb_user u ON p.fk_idUser = u.idUser
  WHERE p.id_post = idPost;
END @@
DELIMITER ;

-- retornar comentários de um post com base em seu id:
DELIMITER @@
CREATE PROCEDURE sp_obterComentariosPorIdPost(IN idPost INT UNSIGNED)
BEGIN
  SELECT
    c.id_comentario AS id_comentario,
    c.textComent AS textComent,
    c.imageComent AS imageComent,
    u.idUser AS idUser,
    u.userName AS userName,
    u.userPhoto AS userPhoto
  FROM comentarios c
  JOIN tb_user u ON c.fk_idUser = u.idUser
  WHERE c.fk_id_post = idPost;
END @@
DELIMITER ;

-- obter quantidade limitada de comentários de um post com base em seu id:
DELIMITER @@
CREATE PROCEDURE sp_obterComentariosPorIdPostLimit(IN idPost INT UNSIGNED, IN limit_ INT UNSIGNED)
BEGIN
  SELECT
    c.id_comentario AS id_comentario,
    c.textComent AS textComent,
    c.imageComent AS imageComent,
    u.idUser AS idUser,
    u.userName AS userName,
    u.userPhoto AS userPhoto
  FROM comentarios c
  JOIN tb_user u ON c.fk_idUser = u.idUser
  WHERE c.fk_id_post = idPost
  LIMIT limit_;
END @@
DELIMITER ;

-- remover like de comentário:
DELIMITER @@
CREATE PROCEDURE sp_removerLikeComentario(
  IN idUser INT UNSIGNED,
  IN idComentario INT UNSIGNED
)
BEGIN
  DELETE FROM comentarios_like WHERE fk_likeComment = idComentario
  AND fk_idUser = idUser;
END @@
DELIMITER ;

-- adicionar like no comentário:
DELIMITER @@
CREATE PROCEDURE sp_darLikeComentario(
  IN idUser INT UNSIGNED,
  IN idComentario INT UNSIGNED
)
BEGIN
  INSERT INTO comentarios_like (fk_likeComment, fk_idUser)
  VALUES (idComentario, idUser);
END @@
DELIMITER ;

DELIMITER @@
CREATE PROCEDURE sp_adicionarComentario(
  IN idUser INT UNSIGNED,
  IN idPost INT UNSIGNED,
  IN text_ VARCHAR(5000),
  IN photo VARCHAR(300)
)
BEGIN
  INSERT INTO comentarios (fk_idUser, fk_id_post, textComent, imageComent, commentDateTime)
  VALUES (idUser, idPost, text_, photo, NOW());
END @@
DELIMITER ;