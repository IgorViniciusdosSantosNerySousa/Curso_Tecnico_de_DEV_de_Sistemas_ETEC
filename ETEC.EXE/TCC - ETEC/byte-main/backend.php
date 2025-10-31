<?php
    require_once "connect.php";

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
        $sql = "SELECT userName, email, idUser, userPhoto, profileImg, vocation, bio FROM tb_user;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function criarPost($idUsuario, $titulo, $texto, $foto, $descricao) {
        global $conn;
        try {
            $sql = "CALL sp_adicionarPost(:titulo, :texto, :foto, :descricao, :idUsuario);";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':titulo', $titulo);
            $stmt->bindParam(':texto', $texto);
            $stmt->bindParam(':foto', $foto);
            $stmt->bindParam(':descricao', $descricao);
            $stmt->bindParam(':idUsuario', $idUsuario);
            $stmt->execute();
            return true;
        } catch (\Throwable $th) {
            
            return false;
        }
    }

    function adicionarTagAoPost($idPost, $idTag) {
        global $conn;
        try {
            $sql = "CALL sp_adicionarTagsPost(:idPost, :idTag);";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':idPost', $idPost);
            $stmt->bindParam(':idTag', $idTag);
            $stmt->execute();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function carregarPostsFeed() {
        
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

    function retornarListaTags() {
        global $conn;
        try {
            $sql = "CALL sp_listarTags();";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function adicionarTags($tagName) {
        global $conn;
        try {
            $sql = "CALL sp_adicionarTags(:tagName);";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":tagName", $tagName);
            $stmt->execute();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function pesquisarPosts($pesquisa) {
        global $conn;
        try {
            $sql = "CALL sp_listarPostPesquisa(:pesquisa);";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':pesquisa', $pesquisa);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function pesquisarPostTags() {
        
    }

    function carregarNumLikes($idPost) {
        global $conn;
        try {
            $sql = "CALL sp_mostrarLikesPost(:id);";
            $sql = "SELECT fk_likePost AS idPost, COUNT(*) AS quantLikes FROM likes WHERE fk_likePost = :id;";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $idPost);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function apagarPost($idPost, $idUser) {
        global $conn;
        try {
            $sql = "CALL sp_removerPostUser(:idPost, :idUser);";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':idPost', $idPost);
            $stmt->bindParam(':idUser', $idUser);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function editarPost($idPost, $title, $text, $photo, $description, $idUser) {
        global $conn;
        try {
            $sql = "CALL sp_editarPost(:idPost, :title, :text, :photo, :description, :idUser);";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':idPost', $idPost);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':text', $text);
            $stmt->bindParam(':photo', $photo);
            $stmt->bindParam(':description', $description);
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

    function editarPerfilUsuario() {

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