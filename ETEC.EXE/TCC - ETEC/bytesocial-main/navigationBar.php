<?php
// se o usuário vier para cá pela url, ele será redirecionado ao feed
if (!$_SERVER['REQUEST_URI'] === 'navigationBar.php') {
  header("Location: feed.php");
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/navigationBar.css">
</head>

<body>
  <?php
  include 'auth.php';
  require_once 'backend.php';
  @session_start();
  $user = $_SESSION['user'];
  $userinfo = pegarInfoUsuario($_SESSION['userId'])[0];
  ?>
  <header>
    <!-- Ao clicar deve sair da conta logada -->
    <div class="nav_bar_Community">
      <a href="feed.php"><img class="logo_nav" src="icons/Logo_byte.png" alt="Logo Byte"></a>
      <form action="search.php">
        <div class="searchArea">
          <input name="p" type="search" class="searchBar" placeholder="Pesquisar Posts ou usuários...">
          <svg style="cursor: pointer;" width="35px" height="35px" viewBox="0 0 24 24" fill="#cfccc6" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M10 5C7.23858 5 5 7.23858 5 10C5 12.7614 7.23858 15 10 15C11.381 15 12.6296 14.4415 13.5355 13.5355C14.4415 12.6296 15 11.381 15 10C15 7.23858 12.7614 5 10 5ZM3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10C17 11.5719 16.481 13.0239 15.6063 14.1921L20.7071 19.2929C21.0976 19.6834 21.0976 20.3166 20.7071 20.7071C20.3166 21.0976 19.6834 21.0976 19.2929 20.7071L14.1921 15.6063C13.0239 16.481 11.5719 17 10 17C6.13401 17 3 13.866 3 10Z" fill="#cfccc6" />
          </svg>
        </div>
      </form>

      <!-- Menu do Usuário burguer -->
      <div class="user-toggle" onclick="toggleUser()">
        <p class="user"><?php echo "Bem vindo, $user"; ?></p>
        <div class="btnUser">
          <a href="profile.php"><img class="user-pic" src="<?php if ($userinfo["userPhoto"] == "") {
                                                              echo "img/profile.png";
                                                            } else {
                                                              echo $userinfo["userPhoto"];
                                                            }; ?>" alt="foto do usuário"></a>
        </div>
        <a class="off" href="./logoff.php">Sair</a>
      </div>
    </div>

    <!-- Menu Pesquisar -->
    <nav class="nav" id="nav">
      <ul class="navList">
        <li class="navItem">
          <svg fill="#cfccc6" width="30px" height="30px" viewBox="0 -32 576 576" xmlns="http://www.w3.org/2000/svg">
            <path d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z" />
          </svg>
          <a class="navLink" href="feed.php">Início</a>
        </li>
        <li class="navItem">
          <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM16 12.75H12.75V16C12.75 16.41 12.41 16.75 12 16.75C11.59 16.75 11.25 16.41 11.25 16V12.75H8C7.59 12.75 7.25 12.41 7.25 12C7.25 11.59 7.59 11.25 8 11.25H11.25V8C11.25 7.59 11.59 7.25 12 7.25C12.41 7.25 12.75 7.59 12.75 8V11.25H16C16.41 11.25 16.75 11.59 16.75 12C16.75 12.41 16.41 12.75 16 12.75Z" fill="#cfccc6" />
          </svg>
          <a class="navLink" href="createPost.php">Criar Post</a>
        </li>
        <li class="navItem">
          <svg width="30px" height="30px" viewBox="0 0 24 24" fill="#cfccc6" xmlns="http://www.w3.org/2000/svg">
            <path d="M22 12C22 6.49 17.51 2 12 2C6.49 2 2 6.49 2 12C2 14.9 3.25 17.51 5.23 19.34C5.23 19.35 5.23 19.35 5.22 19.36C5.32 19.46 5.44 19.54 5.54 19.63C5.6 19.68 5.65 19.73 5.71 19.77C5.89 19.92 6.09 20.06 6.28 20.2C6.35 20.25 6.41 20.29 6.48 20.34C6.67 20.47 6.87 20.59 7.08 20.7C7.15 20.74 7.23 20.79 7.3 20.83C7.5 20.94 7.71 21.04 7.93 21.13C8.01 21.17 8.09 21.21 8.17 21.24C8.39 21.33 8.61 21.41 8.83 21.48C8.91 21.51 8.99 21.54 9.07 21.56C9.31 21.63 9.55 21.69 9.79 21.75C9.86 21.77 9.93 21.79 10.01 21.8C10.29 21.86 10.57 21.9 10.86 21.93C10.9 21.93 10.94 21.94 10.98 21.95C11.32 21.98 11.66 22 12 22C12.34 22 12.68 21.98 13.01 21.95C13.05 21.95 13.09 21.94 13.13 21.93C13.42 21.9 13.7 21.86 13.98 21.8C14.05 21.79 14.12 21.76 14.2 21.75C14.44 21.69 14.69 21.64 14.92 21.56C15 21.53 15.08 21.5 15.16 21.48C15.38 21.4 15.61 21.33 15.82 21.24C15.9 21.21 15.98 21.17 16.06 21.13C16.27 21.04 16.48 20.94 16.69 20.83C16.77 20.79 16.84 20.74 16.91 20.7C17.11 20.58 17.31 20.47 17.51 20.34C17.58 20.3 17.64 20.25 17.71 20.2C17.91 20.06 18.1 19.92 18.28 19.77C18.34 19.72 18.39 19.67 18.45 19.63C18.56 19.54 18.67 19.45 18.77 19.36C18.77 19.35 18.77 19.35 18.76 19.34C20.75 17.51 22 14.9 22 12ZM16.94 16.97C14.23 15.15 9.79 15.15 7.06 16.97C6.62 17.26 6.26 17.6 5.96 17.97C4.44 16.43 3.5 14.32 3.5 12C3.5 7.31 7.31 3.5 12 3.5C16.69 3.5 20.5 7.31 20.5 12C20.5 14.32 19.56 16.43 18.04 17.97C17.75 17.6 17.38 17.26 16.94 16.97Z" fill="#cfccc6" />
            <path d="M12 6.92969C9.93 6.92969 8.25 8.60969 8.25 10.6797C8.25 12.7097 9.84 14.3597 11.95 14.4197C11.98 14.4197 12.02 14.4197 12.04 14.4197C12.06 14.4197 12.09 14.4197 12.11 14.4197C12.12 14.4197 12.13 14.4197 12.13 14.4197C14.15 14.3497 15.74 12.7097 15.75 10.6797C15.75 8.60969 14.07 6.92969 12 6.92969Z" fill="#cfccc6" />
          </svg>
          <a class="navLink" href="profile.php">Perfil</a>
        </li>
        <li class="navItem">
          <svg height="30px" width="30px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 0 512 512" xml:space="preserve">
            <style type="text/css">
              .st0 {
                fill: #cfccc6;
              }
            </style>
            <g>
              <path class="st0" d="M193.499,459.298c5.237,30.54,31.518,52.702,62.49,52.702c30.98,0,57.269-22.162,62.506-52.702l0.32-1.86
		              H193.179L193.499,459.298z" />
              <path class="st0" d="M469.782,371.98c-5.126-5.128-10.349-9.464-15.402-13.661c-21.252-17.648-39.608-32.888-39.608-96.168v-50.194
		            c0-73.808-51.858-138.572-123.61-154.81c2.876-5.64,4.334-11.568,4.334-17.655C295.496,17.718,277.777,0,255.995,0
		            c-21.776,0-39.492,17.718-39.492,39.492c0,6.091,1.456,12.018,4.334,17.655c-71.755,16.238-123.61,81.002-123.61,154.81v50.194
		            c0,63.28-18.356,78.521-39.608,96.168c-5.052,4.196-10.276,8.533-15.402,13.661l-0.466,0.466v49.798h428.496v-49.798
		            L469.782,371.98z" />
            </g>
          </svg>
          <a class="navLink" href="">Notificações</a>
        </li>
        <div class="space"></div>
        <?php if (check_admin($_SESSION['userId']) == 1) : ?>
        <li class="navItem">
          <svg xmlns="http://www.w3.org/2000/svg" fill="#cfccc6" viewBox="0 0 24 24" stroke-width="1.5" stroke="#cfccc6" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
          </svg>
          <a class="navLink" href="administrator.php">Administração</a>
        </li>
        <?php endif; ?>
        <li class="navItem">
          <svg width="30px" height="30px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.265,24.381l.9-.894c4.164.136,4.228-.01,4.411-.438l1.144-2.785L29.805,20l-.093-.231c-.049-.122-.2-.486-2.8-2.965V15.5c3-2.89,2.936-3.038,2.765-3.461L28.538,9.225c-.171-.422-.236-.587-4.37-.474l-.9-.93a20.166,20.166,0,0,0-.141-4.106l-.116-.263-2.974-1.3c-.438-.2-.592-.272-3.4,2.786l-1.262-.019c-2.891-3.086-3.028-3.03-3.461-2.855L9.149,3.182c-.433.175-.586.237-.418,4.437l-.893.89c-4.162-.136-4.226.012-4.407.438L2.285,11.733,2.195,12l.094.232c.049.12.194.48,2.8,2.962l0,1.3c-3,2.89-2.935,3.038-2.763,3.462l1.138,2.817c.174.431.236.584,4.369.476l.9.935a20.243,20.243,0,0,0,.137,4.1l.116.265,2.993,1.308c.435.182.586.247,3.386-2.8l1.262.016c2.895,3.09,3.043,3.03,3.466,2.859l2.759-1.115C23.288,28.644,23.44,28.583,23.265,24.381ZM11.407,17.857a4.957,4.957,0,1,1,6.488,2.824A5.014,5.014,0,0,1,11.407,17.857Z" style="fill:#cfccc6" />
          </svg>
          <a class="navLink" href="alterProfile.php">Configurações</a>
        </li>
        <li class="navItem">
          <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill=#cfccc6>
            <path d="M194-88q-44 0-75-31t-31-75v-572q0-44 31-75t75-31h233q22 0 37.5 15.5T480-819q0 22-15.5 37.5T427-766H194v572h233q22 0 37.5 15.5T480-141q0 22-15.5 37.5T427-88H194Zm472-340H407q-22 0-37.5-15.5T354-481q0-22 15.5-37.5T407-534h259l-72-72q-16-16-16-38t16-38q16-16 38-16t38 16l165 165q16 16 16 37t-16 37L671-279q-16 16-38.5 16T594-280q-16-16-16-38t16-38l72-72Z" />
          </svg>
          <a class="navLink" href="logout.php">Sair</a>
        </li>
      </ul>
    </nav>

    <!-- Area clicavel do burguer -->
    <div class="btnMenu" onclick="toggleMenu()">
      <div class="btnBurger"></div>
    </div>
  </header>

  <!-- javascript do burguer -->
  <script src="scripts/Burger.js"></script>
</body>

</html>