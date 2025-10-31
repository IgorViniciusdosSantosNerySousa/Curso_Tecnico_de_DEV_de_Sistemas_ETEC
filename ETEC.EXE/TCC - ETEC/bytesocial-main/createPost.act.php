<?php
// bytesocial/createPost.act.php

// Garante que a sessão seja iniciada ANTES de qualquer output
@session_start();

// Inclui o backend que contém as funções e a conexão com o banco
require_once "backend.php"; // backend.php já inclui connect.php

// --- Verificação de Autenticação ---
// Verifica se o usuário está logado pela variável de sessão 'user' (definida em login.act.php)
if (!isset($_SESSION['user'])) {
    // Se não estiver logado, redireciona para a página de login
    $_SESSION['msg'] = "Login necessário para criar um post."; // Mensagem de erro opcional
    header('Location: login.php');
    exit; // Interrompe a execução do script
}

// Obtém o username da sessão
$loggedInUsername = $_SESSION['user'];

// Obtém o ID do usuário a partir do username usando a nova função
$userId = getIdByUsername($loggedInUsername);

// Verifica se o ID foi encontrado (importante caso haja inconsistência)
if ($userId === null) {
    // Erro: Não foi possível encontrar o ID do usuário logado.
    // Pode ser um erro interno ou sessão inválida. Destruir a sessão e redirecionar para login.
    session_unset();
    session_destroy();
    $_SESSION['msg'] = "Erro ao verificar usuário. Faça login novamente.";
    header('Location: login.php');
    exit;
}
// --- Fim da Verificação de Autenticação ---


// Define a pasta de destino para uploads (relativa a este script)
define('UPLOAD_DIR', './assets/'); // Certifique-se que esta pasta existe em /bytesocial/ e tem permissão de escrita!

// Array para armazenar mensagens de erro
$errors = [];
// Variável para armazenar o caminho da imagem salva
$imagePath = null;

// Verifica se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // 1. Recupera os dados do formulário
    // $userId já foi obtido acima
    $titulo = trim($_POST['titulo'] ?? '');
    $assunto = trim($_POST['assunto'] ?? ''); // Mapeado para postDescription
    $descricao = $_POST['descricao'] ?? ''; // Conteúdo do CKEditor, mapeado para postText

    // 2. Validação dos Inputs
    if (empty($titulo)) {
        $errors[] = "O título é obrigatório.";
    }
    if (empty($assunto)) {
        $errors[] = "O assunto (tag) é obrigatório.";
    }
    // Verifica se a descrição (CKEditor) está vazia ou contém apenas HTML vazio
    // if (empty($descricao) || trim(strip_tags($descricao)) === '') {
    //      $errors[] = "A descrição é obrigatória.";
    // }

    // 3. Processamento do Upload da Imagem (se houver e não houver erros de validação ainda)
    if (empty($errors) && isset($_FILES['imagem']) && $_FILES['imagem']['error'] == UPLOAD_ERR_OK) {

        // Garante que o diretório de upload existe
        if (!is_dir(UPLOAD_DIR)) {
            // Tenta criar o diretório (requer permissão no diretório pai)
            if (!mkdir(UPLOAD_DIR, 0755, true)) { // 0755 -> permissões comuns
                 $errors[] = 'Erro: Não foi possível criar o diretório de upload.';
                 // Interrompe o processamento da imagem se o diretório falhar
            }
        }
        // Se ainda não for um diretório ou não tiver permissão de escrita
         if (!is_dir(UPLOAD_DIR) || !is_writable(UPLOAD_DIR)) {
             $errors[] = 'Erro: O diretório de upload não existe ou não tem permissão de escrita: ' . UPLOAD_DIR;
              // Interrompe o processamento da imagem
         }


        // Continua o processamento da imagem apenas se não houver erros de diretório
        if (empty($errors)) {
            $fileTmpPath = $_FILES['imagem']['tmp_name'];
            $fileName = $_FILES['imagem']['name'];
            $fileSize = $_FILES['imagem']['size'];
            $fileType = $_FILES['imagem']['type'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));

            // Sanitiza o nome do arquivo (básico) e cria nome único
            $safeBaseName = preg_replace('/[^A-Za-z0-9.\-]/', '_', pathinfo($fileName, PATHINFO_FILENAME));
            $safeBaseName = md5($safeBaseName . time());
            $newFileName = uniqid($safeBaseName . '_', true) . '.' . $fileExtension;
            $dest_path = UPLOAD_DIR . $newFileName;

            // Verifica extensões permitidas
            $allowedfileExtensions = ['jpg', 'jpeg', 'gif', 'png', 'webp'];
            if (in_array($fileExtension, $allowedfileExtensions)) {
                // Verifica o tamanho do arquivo (ex: max 5MB)
                $maxFileSize = 5 * 1024 * 1024; // 5 MB
                if ($fileSize <= $maxFileSize) {
                    // Verifica o tipo MIME real (mais seguro)
                    $fileMimeType = mime_content_type($fileTmpPath);
                    $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
                    if (in_array($fileMimeType, $allowedMimeTypes)) {

                        // Tenta mover o arquivo para a pasta de destino
                        if(move_uploaded_file($fileTmpPath, $dest_path)) {
                          $imagePath = $dest_path; // Guarda o caminho relativo para salvar no BD
                        } else {
                          $errors[] = 'Erro ao mover o arquivo de imagem para o diretório de destino.';
                           // Log mais detalhado pode ser útil aqui (permissões, etc.)
                        }
                    } else {
                         $errors[] = 'Tipo MIME do arquivo inválido: ' . htmlspecialchars($fileMimeType);
                    }
                } else {
                     $errors[] = 'O arquivo excede o tamanho máximo permitido (5MB).';
                }
            } else {
                $errors[] = 'Tipo de arquivo inválido. Apenas JPG, JPEG, PNG, WEBP e GIF são permitidos.';
            }
        } // Fim if (empty($errors)) para diretório

    } elseif (isset($_FILES['imagem']) && $_FILES['imagem']['error'] != UPLOAD_ERR_NO_FILE && $_FILES['imagem']['error'] != UPLOAD_ERR_OK) {
        // Se houve um erro de upload (diferente de "nenhum arquivo enviado")
        $errors[] = 'Erro no upload da imagem. Código: ' . $_FILES['imagem']['error'];
    }

    // 4. Salvar no Banco de Dados se não houver erros
    if (empty($errors)) {
        // Chama a função do backend para criar o post
        // Mapeamento: criarPost($idUsuario, $titulo, $texto=$descricao_ckeditor, $foto=$imagePath, $descricao=$assunto_select)
        $success = criarPost($userId, $titulo, $descricao, $imagePath, $assunto); // Usa a função de backend.php

        if ($success) {
            // Post criado com sucesso! Redireciona para uma página de sucesso ou para o feed
            $_SESSION['success_message'] = "Post criado com sucesso!"; // Mensagem opcional via sessão
            header('Location: feed.php'); // Redireciona para o feed (ajuste conforme necessário)
            exit;
        } else {
            // Erro ao salvar no banco de dados
            // Tenta obter mais detalhes do erro do PDO, se possível (depende da configuração do PDO em connect.php)
            global $conn;
            $dbError = $conn->errorInfo();
            $errorMessage = "Ocorreu um erro ao salvar o post no banco de dados.";
            // if ($dbError[0] !== '00000') { // Verifica se houve um erro SQL
            //     $errorMessage .= " Detalhes: " . $dbError[2]; // Cuidado ao expor detalhes do erro em produção
            // }
            $errors[] = $errorMessage . " Tente novamente.";

        }
    }

    // 5. Se houver erros, redireciona de volta para o formulário exibindo-os
    if (!empty($errors)) {
        // Guarda os erros na sessão para exibí-los na página do formulário
        $_SESSION['form_errors'] = $errors;
        // Guarda os dados submetidos (exceto senha, imagem) para repopular o formulário
        $_SESSION['form_data'] = ['titulo' => $titulo, 'assunto' => $assunto, 'descricao' => $_POST['descricao'] /* Mantém o HTML original */];
        var_dump($errors);
        //header('Location: createPost.php'); // Redireciona de volta para o formulário
        exit;
    }

} else {
    // Se o acesso não for via POST, redireciona para o formulário
    header('Location: createPost.php');
    exit;
}

?>