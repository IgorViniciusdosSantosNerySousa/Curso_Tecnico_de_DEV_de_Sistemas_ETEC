<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/profile.css">
    <script src=""></script>

    <title>Alterar Perfil - Byte</title>
</head>

<body>
    <?php
    include('navigationBar.php');
    ?>
    <div class="container">
        <div class="contentUserProfile">
            <div class="background">
                <div class="userPic">
                    <img src="img/profile.png" alt="" id="picture">
                </div>
            </div>
            <a class="edit" href="./profile.php" style="padding-left: 15px;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 30 30" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15M9 12l3 3m0 0 3-3m-3 3V2.25" />
                </svg>
            Salvar
            </a>
            <div class="alterProfile">
                <label for="">Banner</label>
                <label for="banner" class="fileAreaBanner">
                    <span class="text" id="file-name-display">Selecionar Imagem</span>
                </label>
                <hr>
                <label>Foto de Perfil</label>
                <label for="profileImg" class="fileAreaProfile">
                    <span class="text" id="file-name-display">Selecionar Imagem</span>
                </label>
                <hr>
                <label for="profileComboBox">Profissão</label>
                <select id="profileComboBox">
                    <option disabled selected>Selecione...</option>
                    <option>Desenvolvedor Front-End</option>
                    <option>Desenvolvedor Back-End</option>
                    <option>Desenvolvedor FullStack</option>
                    <option>Desenvolvedor Embarcados</option>
                    <option>Desenvolvedor de LLMs</option>
                    <option>Estudante</option>
                    <option>DevOps</option>
                    <option>UI/UX Designer</option>
                    <option>Entusiasta da Tecnologia</option>
                    <option>Segurança da informação</option>
                    <option>Analista de Dados</option>
                    <option>Gerente de Projeto</option>
                    <option>Help Desk</option>
                </select>
                <hr>
                <label for="biotxt">Bio</label>
                <textarea name="" id="biotxt"></textarea>
            </div>
        </div>
    </div>
</body>

</html>