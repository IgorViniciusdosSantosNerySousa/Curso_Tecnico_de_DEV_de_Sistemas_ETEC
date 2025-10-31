<?php
    require_once "connect.php";
    header('Cache-Control: no-cache, no-store, must-revalidate');
    header('Pragma: no-cache');
    header('Expires: 0');

    // funções abaixo são relativas a cadastro:
    function validarFormularioCadastro($user, $email, $password) {

    }

    function cadastrarUsuario($username, $email, $senha)
    {
        global $conn;
        try {
            $sql = "CALL sp_CriarUsuario(:username, :email, :senha)";
    
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':username', trim($username ," "));
            $stmt->bindParam(':email', trim($email ," "));
            $password = password_hash(trim($senha, " "), PASSWORD_DEFAULT);
            $stmt->bindParam(':senha', $password);
            $stmt->execute();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function pegarQuantidadePosts($user_id) {
        global $conn;
        $sql = "SELECT COUNT(*) AS quantidade FROM post WHERE fk_idUser = :id";
        try {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $user_id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function mostrarSeguidores($id) {
        global $conn;
        $sql = "SELECT
                    f.fk_user_seguidor AS id_user,
                    u.username AS username,
                    u.userPhoto AS userphoto,
                    u.vocation AS vocation,
                    u.bio AS bio
                FROM follower f
                RIGHT JOIN tb_user u
                ON f.fk_user_seguidor = u.idUser
                WHERE f.fk_user_perfil = :id";
        try {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function check_admin($id) {
        global $conn;
        $sql = "SELECT isAdmin FROM tb_user WHERE idUser = :id;";
        try {
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function mostrarSeguindo($id) {
        global $conn;
        $sql = "SELECT
                    f.fk_user_perfil AS id_user,
                    u.username AS username,
                    u.userPhoto AS userphoto,
                    u.vocation AS vocation,
                    u.bio AS bio
                FROM follower f
                RIGHT JOIN tb_user u
                ON f.fk_user_perfil = u.idUser
                WHERE f.fk_user_seguidor = :id";
        try {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function checkSeguindo($id, $id_seguidor) {}

    function pegarInfoUsuario($id) {
        global $conn;
        $sql = "SELECT username, userPhoto, profileImg, vocation, bio, (SELECT COUNT(*) FROM follower WHERE fk_user_perfil = :id) AS followers, (SELECT COUNT(*) FROM follower WHERE fk_user_seguidor = :id) AS following_ FROM tb_user WHERE idUser = :id";
        try {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        } catch (\Throwable $th) {
            return false;
        }
    }

    // devido uma ambiguidade nos nomes nas tabelas de banco de dados
    // fotousuario = foto de perfil; fotoperfil = banner

    function mudarFotoPerfil($id, $urlPhoto) {
        global $conn;
        try {
            $sql = "CALL sp_mudarFotoPerfil(:id, :urlPhoto);";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':urlPhoto', $urlPhoto);
            $stmt->execute();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
    
    function mudarFotoUsuario($id, $urlPhoto) {
        global $conn;
        try {
            $sql = "CALL sp_mudarFotoUsuario(:id, :urlPhoto);";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':urlPhoto', $urlPhoto);
            $stmt->execute();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function checarEmailCadastrado($email) {
        global $conn;

        // Consulta para verificar se o email informado está cadastrado
        $sql = "SELECT COUNT(*) FROM tb_user WHERE email = :email";
        $stmt = $conn->prepare($sql);
        // Remove espaços em branco dos parâmetros
        $email = trim($email);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        // Retorna true se a contagem de registros for maior que zero
        return ($stmt->fetchColumn() > 0);
    }

    function checarUsuarioExiste($user_, $email_) {
        global $conn;
        
        // Consulta para verificar se o usuário com o email informado existe
        $sql = "SELECT COUNT(*) FROM tb_user WHERE userName = :usuario AND email = :email";
        $stmt = $conn->prepare($sql);
        
        // Remove espaços em branco dos parâmetros
        $usuario = trim($user_);
        $email = trim($email_);
        
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':email', $email);
        
        $stmt->execute();
        
        // Retorna true se a contagem de registros for maior que zero
        return ($stmt->fetchColumn() > 0);
    }
    

    function checarUsuarioLogin($email_, $senha_) {
        global $conn;
        
        // Consulta o hash da senha para o usuário e email informados
        $sql = "SELECT password_ FROM tb_user WHERE email = :email";
        $stmt = $conn->prepare($sql);
        
        // Remove espaços em branco dos parâmetros
        $email = trim($email_);
        
        $stmt->bindParam(':email', $email);
        
        $stmt->execute();
        
        // Obtém o hash da senha armazenado no banco de dados
        $hashArmazenado = $stmt->fetchColumn();
        
        // Verifica se o hash existe e se a senha informada confere com o hash armazenado
        if ($hashArmazenado && password_verify(trim($senha_), $hashArmazenado)) {
            return true;
        } else {
            return false;
        }
    }

    function puxarUsuario($email) {
        global $conn;
        $sql = "SELECT userName FROM tb_user WHERE email = :email";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result[0];
    }

    function puxarQuantidadeUser() {
        global $conn;
        $sql = "SELECT COUNT(*) AS user_count FROM tb_user;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result[0];
    }
    
    function seguirUsuario($idPerfil, $idSeguidor) {
        global $conn;
        try {
            $sql = "CALL sp_seguirUsuario(:idPerfil, :idSeguidor);";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':idPerfil', $idPerfil);
            $stmt->bindParam(':idSeguidor', $idSeguidor);
            $stmt->execute();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function deixarSeguirUsuario($idPerfil, $idSeguidor) {
        global $conn;
        try {
            $sql = "CALL sp_deixarSeguirUsuario(:idPerfil, :idSeguidor);";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':idPerfil', $idPerfil);
            $stmt->bindParam(':idSeguidor', $idSeguidor);
            $stmt->execute();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function getIdByUsername($username) {
        global $conn; // Usa a conexão global definida em connect.php
        try {
            $sql = "SELECT idUser FROM tb_user WHERE userName = :username LIMIT 1";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->execute();

            // Busca o resultado como um array associativo
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            // Retorna o idUser se encontrado, senão retorna null
            return $result ? (int)$result['idUser'] : null;

        } catch (PDOException $e) {
            // Em um ambiente real, você poderia logar o erro: error_log("Erro ao buscar ID por username: " . $e->getMessage());
            return null; // Retorna null em caso de erro no banco
        } catch (\Throwable $th) {
            // Captura outros possíveis erros
            // error_log("Erro geral em getIdByUsername: " . $th->getMessage());
            return null;
        }
    }

    function tornarUsuarioAdmin($idUser) {
        global $conn;
        try {
            $sql = "CALL sp_darPermissaoAdmin(:idUser);";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':idUser', $idUser);
            $stmt->execute();
            return true;
        } catch (\Throwable $th) {
            
            return false;
        }
    }
    
    function mostrarSeguidoresUsuario($idUsuario) {
        global $conn;
        $sql = "CALL sp_mostrarSeguidoresUsuario(:id)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":id", $idUsuario);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function mostrarUsuarios() {
        global $conn;
        $sql = "CALL sp_listarUsuarios()";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function criarPost($idUsuario, $titulo, $texto, $foto, $assunto) {
        global $conn;
        try {
            $sql = "CALL sp_adicionarPost(:titulo, :texto, :foto, :assunto, :idUsuario);";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':titulo', $titulo);
            $stmt->bindParam(':texto', $texto);
            $stmt->bindParam(':foto', $foto);
            $stmt->bindParam(':assunto', $assunto);
            $stmt->bindParam(':idUsuario', $idUsuario);
            $stmt->execute();
            return true;
        } catch (\Throwable $th) {
            
            return false;
        }
    }

    function carregarUsuários() {
        global $conn;
        try {
            $sql = "CALL sp_listarUsuarios();";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function pesquisarPosts($pesquisa, $assunto, $userId, int $limit = 10, int $offset = 0) {
        $pesquisa = trim($pesquisa, " ");
        global $conn;
        try {
            $posts = [];
            $sql = "SELECT  p.id_post as id_post,
                            p.postTitle as postTitle, 
                            SUBSTRING(p.postText, 1, 150) as postText,
                            p.postPhoto as postPhoto, 
                            p.postAssunto as postAssunto, 
                            p.postDateTime as postDateTime,
                            u.idUser AS authorId,
                            u.userName AS authorName,
                            u.userPhoto AS authorPhoto
                    FROM post p
                    JOIN tb_user u ON p.fk_idUser = u.idUser ";
                    
            if (trim($assunto, " ") != "") {
                $sql .= "WHERE p.postAssunto = :assunto AND (";
            } else {
                $sql .= "WHERE (";
            }
            $sql .= "
                    p.postTitle LIKE CONCAT('%', :pesquisa, '%')
                    OR p.postText LIKE CONCAT('%', :pesquisa, '%'))
                    ORDER BY p.postDateTime DESC
                    LIMIT :limit OFFSET :offset;";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            if ($assunto != "") { $stmt->bindParam(':assunto', $assunto, PDO::PARAM_STR); }
            $stmt->bindParam(':pesquisa', $pesquisa, PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (!empty($result)) {
                foreach ($result as $row) {
                    $postId = (int)$row['id_post'];
                    $row['like_count']    = carregarNumLikes($postId);
                    $row['comment_count'] = getNumComentario($postId);
                    $row['user_has_liked'] = $userId ? checkUserLikePost($userId, $postId) : false;
                    $posts[] = $row;
                }
            }
            return $posts;
        } catch (\PDOException $e) {
            error_log("Erro ao carregar posts da pesquisa: " . $e->getMessage());
            return $e;
        } catch (\Throwable $th) {
            error_log("Erro geral em pesquisarPosts: " . $th->getMessage());
            return $th;
        }
    }

    function getNumComentario($idPost) {
        global $conn;
        try {
            $sql = "SELECT COUNT(*) as quantComentarios from comentarios where fk_id_post = :idpost;";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':idpost', $idPost);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result[0];
        } catch (\Throwable $th) {
            return false;
        }
    }

    function checkUserLikePost($userId, $postId) {
        global $conn;
        try {
            if ($userId <= 0) return false; // Usuário não logado ou inválido
            $sql = "SELECT COUNT(*) as user_liked FROM likes WHERE fk_likePost = :idpost AND fk_idUser = :userid";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":idpost", $postId);
            $stmt->bindParam(":userid", $userId);            
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result[0]["user_liked"] > 0 ? 1 : 0;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function checkUserLikeComment($userId, $comment_id) {
        global $conn;
        try {
            if ($userId <= 0) return false; // Usuário não logado ou inválido
            $sql = "SELECT COUNT(*) as user_liked FROM comentarios_like WHERE fk_likeComment = :comment_id AND fk_idUser = :userid";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":comment_id", $comment_id);
            $stmt->bindParam(":userid", $userId);            
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result[0]["user_liked"] > 0 ? 1 : 0;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function mostrarPost($postId) {
        global $conn; 
        try {
            $post = [];
            $sql = "CALL sp_obterPostPorId(:id)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $postId, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            if (!empty($result)) {
                foreach ($result as $row) {
                    $postId = (int)$row['id_post'];

                    $row['like_count']    = carregarNumLikes($postId);
                    $row['comment_count'] = getNumComentario($postId);
                    if ( isset($_SESSION['userId']) ) {
                        $row['user_has_liked'] = $_SESSION['userId'] ? checkUserLikePost($_SESSION['userId'], $postId) : false;
                    }
                    $post[] = $row;
                }
            }
            return $post;
        } catch (\PDOException $e) { 
            error_log("Erro ao carregar posts do feed: " . $e->getMessage());
            return false;
        } catch (\Throwable $th) {
            error_log("Erro geral em carregarPostsFeed: " . $th->getMessage());
            return false;
        }
    }

    function carregarPostsFeed($userId, int $limit = 10, int $offset = 0) {
        global $conn;
        try {
            $posts = [];
            $sql = "SELECT p.id_post, p.postTitle, SUBSTRING(p.postText, 1, 150) as postText, p.postPhoto, p.postAssunto, p.postDateTime,
                           u.idUser AS authorId, u.userName AS authorName, u.userPhoto AS authorPhoto
                    FROM post p
                    JOIN tb_user u ON p.fk_idUser = u.idUser
                    ORDER BY p.postDateTime DESC
                    LIMIT :limit OFFSET :offset";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (!empty($result)) {
                foreach ($result as $row) {
                    $postId = (int)$row['id_post'];
                    $row['like_count']    = carregarNumLikes($postId);
                    $row['comment_count'] = getNumComentario($postId);
                    $row['user_has_liked'] = $userId ? checkUserLikePost($userId, $postId) : false;
                    $posts[] = $row;
                }
            }
            return $posts;
        } catch (\PDOException $e) {
            error_log("Erro ao carregar posts do feed: " . $e->getMessage());
            return false;
        } catch (\Throwable $th) {
            error_log("Erro geral em carregarPostsFeed: " . $th->getMessage());
            return false;
        }
    }

    function carregarNumLikesComentarios($comment_id) {
        global $conn;
        try {
            $sql = "
            SELECT COUNT(*) AS quantLikes
            FROM comentarios_like
            WHERE fk_likeComment = :comment_id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':comment_id', $comment_id);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result[0];
        } catch (\Throwable $th) {
            return false;
        }
    }

    function carregarCommentariosPost($userId, $postId, int $limit = 10, int $offset = 0) {
        global $conn;
        try {
            $posts = [];
            $sql = "SELECT 
                c.id_comentario AS id_comment,
                u.idUser AS id_user,
                u.userName AS username,
                u.userPhoto AS user_photo,
                c.fk_id_post AS id_post,
                c.textComent AS comment,
                c.commentDateTime AS comment_datetime,
                c.imageComent AS comment_image
                FROM comentarios c
                JOIN tb_user u ON c.fk_idUser = u.idUser
                WHERE c.fk_id_post = :postId
                ORDER BY c.commentDateTime DESC
                LIMIT :limit OFFSET :offset";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':postId', $postId, PDO::PARAM_INT);
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (!empty($result)) {
                foreach ($result as $row) {
                    $postId = (int)$row['id_post'];
                    $row['like_count'] = carregarNumLikesComentarios((int)$row['id_comment']);
                    $row['user_has_liked'] = $userId ? checkUserLikeComment($userId, (int)$row['id_comment']) : false;
                    $posts[] = $row;
                }
            }
            return $posts;
        } catch (\PDOException $e) {
            error_log("Erro ao carregar comentarios do post: " . $e->getMessage());
            return $e;
        } catch (\Throwable $th) {
            error_log("Erro geral em carregarCommentariosPost: " . $th->getMessage());
            return $th;
        }
    }

    function adicionarComentario($idUser, $idPost, $comentario, $urlPhoto) {
        global $conn;
        try {
            $sql = "CALL sp_adicionarComentario(:idUser, :idPost, :comentario, :foto)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':idUser', $idUser);
            $stmt->bindParam(':idPost', $idPost);
            $stmt->bindParam(':comentario', $comentario);
            $stmt->bindParam(':foto', $urlPhoto);
            $stmt->execute();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function removerComentarioUsuario($idUser, $idComentario)
    {
        global $conn;
        try {
            $sql = "CALL sp_removerComentarioUser(:idComentario, :idUser)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':idUser', $idUser);
            $stmt->bindParam(':idComentario', $idComentario);
            $stmt->execute();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
    
    function carregarNumLikes($idPost) {
        global $conn;
        try {
            $sql = "CALL sp_mostrarLikesPost(:id);";
            $sql = "SELECT COUNT(*) AS quantLikes FROM likes WHERE fk_likePost = :id;";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $idPost);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result[0];
        } catch (\Throwable $th) {
            return false;
        }
    }

    function apagarPost($idPost, $idUser) {
        global $conn;
        try {
            $sql = 
            "DELETE FROM comentarios_like WHERE fk_likeComment IN (SELECT id_comentario FROM comentarios WHERE fk_id_post = :idPost);
             DELETE FROM comentarios WHERE fk_id_post = :idPost;
             DELETE FROM likes WHERE fk_likePost = :idPost;
             DELETE FROM post WHERE id_post = :idPost AND fk_idUser = :idUser;
            ";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':idPost', $idPost);
            $stmt->bindParam(':idUser', $idUser);
            $stmt->execute();
            return true;
        } catch (\Throwable $th) {
            return $th;
        }
    }

    function editarPost($idPost, $title, $text, $photo, $assunto, $idUser) {
        global $conn;
        try {
            $sql = "CALL sp_editarPost(:idPost, :title, :text, :photo, :assunto, :idUser);";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':idPost', $idPost);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':text', $text);
            $stmt->bindParam(':photo', $photo);
            $stmt->bindParam(':assunto', $assunto);
            $stmt->bindParam(':idUser', $idUser);
            $stmt->execute();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function apagarPostAdmin($idPost, $idAdmin) {
        global $conn;
        try {
            $sql = "CALL sp_removerPostAdmin(:idPost, :idAdmin);";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':idPost', $idPost);
            $stmt->bindParam(':idAdmin', $idAdmin);
            $stmt->execute();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function mudarBioUsuario($idUsuario, $bio) {
        global $conn;
        try {
            $sql = "CALL sp_mudarBio(:id, :bio)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $idUsuario);
            $stmt->bindParam(':bio', $bio);
            $stmt->execute();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function mudarVocacaoUsuario($idUsuario, $vocacao) {
        global $conn;
        try {
            $sql = "UPDATE tb_user SET vocation = :vocacao WHERE idUser = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $idUsuario);
            $stmt->bindParam(':vocacao', $vocacao);
            $stmt->execute();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function apagarUsuario($idUsuario) {
        global $conn;
        try {
            $sql = "CALL sp_apagarConta(:idUser);";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':idUser', $idUsuario);
            $stmt->execute();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function apagarUsuarioAdmin($idUsuario, $idAdmin) {
        global $conn;
        try {
            $sql = "CALL sp_removerUsuario(:idUser, :idAdmin);";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':idUser', $idUsuario);
            $stmt->bindParam(':idAdmin', $idAdmin);
            $stmt->execute();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function darLikePost($idPost, $idUser) {
        global $conn;
        try {
            $sql = "CALL sp_darLike(:idPost, :idUser);";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':idPost', $idPost);
            $stmt->bindParam(':idUser', $idUser);
            $stmt->execute();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function tirarLikePost($idPost, $idUser) {
        global $conn;
        try {
            $sql = "CALL sp_removerLike(:idPost, :idUser);";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':idPost', $idPost);
            $stmt->bindParam(':idUser', $idUser);
            $stmt->execute();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function darLikeComentario($idComment, $idUser) {
        global $conn;
        try {
            $sql = "CALL sp_darLikeComentario(:idUser, :idComment);";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':idComment', $idComment);
            $stmt->bindParam(':idUser', $idUser);
            $stmt->execute();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function tirarLikeComentario($idComment, $idUser) {
        global $conn;
        try {
            $sql = "CALL sp_removerLikeComentario(:idUser, :idComment);";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':idComment', $idComment);
            $stmt->bindParam(':idUser', $idUser);
            $stmt->execute();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }