<?php
    require_once "auth.php";
    require_once "backend.php";
    if ( !isset( $_GET['id'] ) ) {
        header("Location: profile.php?id=" . $_SESSION['userId']);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/profile.css">
    <link rel="stylesheet" href="style/user_page.css">

    <title>Perfil - Byte</title>
</head>

<body>
    <?php

        require_once "navigationBar.php";

        $user_id = 0;

        $user_id = $_GET['id'];

        $info = pegarInfoUsuario($user_id)[0];

        if ( $user_id > puxarQuantidadeUser()) {
            header("Location: 404.php");
        }

        $qntPosts = pegarQuantidadePosts($user_id)[0]["quantidade"];
    ?>
    <div class="container">
        <div class="contentUserProfile">
            <div class="background" <?php if ($info["profileImg"] != "") {
                echo 'style="background-size: cover; background-image: url(' . $info["profileImg"] . ')"';
            } ?> >
                <div class="userPic">
                    <!-- caso não tenha foto no banco de dados, ele mostra a foto padrão -->
                    <img src="<?php if ($info["userPhoto"] == "") {echo "img/profile.png";} else {echo $info["userPhoto"];}; ?>" alt="" id="picture">
                </div>
            </div>
            <div class="bio">
                <?php 
                if ($user_id == $_SESSION['userId']) {
                    echo '<a class="edit" href="./alterProfile.php">
                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="40px" fill="#000000">
                        <path d="M186.67-186.67H235L680-631l-48.33-48.33-445 444.33v48.33ZM120-120v-142l559.33-558.33q9.34-9 21.5-14 12.17-5 25.5-5 12.67 0 25 5 12.34 5 22 14.33L821-772q10 9.67 14.5 22t4.5 24.67q0 12.66-4.83 25.16-4.84 12.5-14.17 21.84L262-120H120Zm652.67-606-46-46 46 46Zm-117 71-24-24.33L680-631l-24.33-24Z" />
                    </svg>
                    Editar</a>';
                } else {
                    echo "<div style='height:3rem'></div>";
                }
                ?>

                <p class="userName"><?php echo $info["username"]; ?></p>
                <!-- se a vocação ou bio não existir no banco de dados, ele NÃO irá exibir -->
                <?php 
                if ($info["vocation"] != "") {
                    echo '<p class="userVocation">' . $info["vocation"] . '</p>';
                };

                if ($info["bio"] != "") {
                    echo '<p class="txtBio">' . $info["bio"] . '</p>';
                };

                ?>
            </div>
            <div class="buttonContainer">
                <a style="text-decoration: none;" href="profile.php?id=<?php echo $user_id;?>&page=posts">
                    <button style="cursor: pointer">Postagens (<?php echo $qntPosts; ?>)</button>
                </a>
                <a style="text-decoration: none;" href="profile.php?id=<?php echo $user_id;?>&page=followers">
                    <button style="cursor: pointer">Seguidores (<?php echo $info["followers"]; ?>)</button>
                </a>
                <a style="text-decoration: none;" href="profile.php?id=<?php echo $user_id;?>&page=following">
                    <button style="cursor: pointer">Seguindo (<?php echo $info["following_"]; ?>)</button>
                </a>
            </div>
        </div>

        <?php 
        
        $seguidores = mostrarSeguidores($user_id);
        $seguindo = mostrarSeguindo($user_id);
        if (count($seguidores) !== 0 && @$_GET['page'] === "followers") {
            foreach ($seguidores as $seguidor) {
                $id_seguidor = $seguidor["id_user"];
                $user_seguidor = $seguidor["username"];
                $foto_seguidor = $seguidor["userphoto"];
                if ($foto_seguidor === "") {
                    $foto_seguidor = "img/profile.png";
                }
                $vocacao_seguidor = $seguidor["vocation"];
                $bio_seguidor = $seguidor["bio"];
                echo "
                <div class='user_bar'>
                    <div class='profile_pic'>
                        <a style='text-decoration: none; color: black;' href='profile.php?id=$id_seguidor&page=followers'>
                            <img src='$foto_seguidor'>
                        </a>
                    </div>
                    <div class='text'>
                        <div class='user_name'>
                            <a style='text-decoration: none; color: black;' href='profile.php?id=$id_seguidor&page=followers'>
                                <p>$user_seguidor</p>
                            </a>
                        </div>
                        <div class='bio'>
                            <p>$bio_seguidor</p>
                        </div>
                        <div class='tag_bar'>
                            <div class='tag'>
                                <p>$vocacao_seguidor</p>
                            </div>
                            <div class='follow'>
                                <button type='submit' id='follow'>SEGUIR</button>
                            </div>
                        </div>
                    </div>
                </div>
                ";
            }
        }
        
        if (count($seguidores) !== 0 && @$_GET['page'] === "following") {
            foreach ($seguindo as $seguidor) {
                $id_seguidor = $seguidor["id_user"];
                $user_seguidor = $seguidor["username"];
                $foto_seguidor = $seguidor["userphoto"];
                if ($foto_seguidor === "") {
                    $foto_seguidor = "img/profile.png";
                }
                $vocacao_seguidor = $seguidor["vocation"];
                $bio_seguidor = $seguidor["bio"];
                echo "
                <div class='user_bar'>
                    <div class='profile_pic'>
                        <a style='text-decoration: none; color: black;' href='profile.php?id=$id_seguidor&page=followers'>
                            <img src='$foto_seguidor'>
                        </a>
                    </div>
                    <div class='text'>
                        <div class='user_name'>
                            <a style='text-decoration: none; color: black;' href='profile.php?id=$id_seguidor&page=followers'>
                                <p>$user_seguidor</p>
                            </a>
                        </div>
                        <div class='bio'>
                            <p>$bio_seguidor</p>
                        </div>
                        <div class='tag_bar'>
                            <div class='tag'>
                                <p>$vocacao_seguidor</p>
                            </div>
                            <div class='follow'>
                                <button type='submit' id='follow'>SEGUIR</button>
                            </div>
                        </div>
                    </div>
                </div>
                ";
            }
        }
        ?>
</body>

</html>