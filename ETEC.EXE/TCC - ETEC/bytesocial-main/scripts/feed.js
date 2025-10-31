$(document).ready(function () {
  // Usar delegação de eventos para elementos criados dinamicamente
  $(document).on("click", ".menu-toggle", function (event) {
    const buttonId = $(this).attr("id");
    const postId = buttonId.replace("menu_toggle_", "");
    const menuOpenId = `#dropdown_${postId}`;

    const currentMenu = $(menuOpenId);
    $(".menu-open").not(currentMenu).hide();
    currentMenu.toggle();

    event.stopPropagation();
  });

  // Fecha qualquer dropdown aberto se clicar em qualquer lugar fora de um menu
  $(document).on("click", function (event) {
    // Verifica se o clique não foi dentro de um elemento .menu (botão ou dropdown)
    if (!$(event.target).closest(".menu").length) {
      $(".menu-open").hide(); // Oculta todos os menus abertos
    }
  });

  $(document).ready(function () {
    // Evento de clique no botão Excluir Post
    $(document).on("click", "#excluirPost", function (event) {
      // Extrair o ID do post a partir do botão clicado
      const buttonId = $(this).attr("id");
      const postId = buttonId.split("_")[1];
      
      // Esconde todos os modais antes de exibir o modal correto
      $(".modalContainer").css("display", "none");  // Esconde todos os modais
      $("#excluirModal").css("display", "flex");  // Exibe o modal de Excluir
  
      // Armazenar o ID do post que será excluído
      const postToDelete = postId;
  
      // Quando o usuário clicar em "Excluir"
      $(".excluir").on("click", function () {
        // Chama a função para excluir o post
        excluirPost(postToDelete);
        // Fecha o modal
        $(".modalContainer").fadeOut();
      });
  
      // Quando o usuário clicar em "Cancelar"
      $(".cancelar").on("click", function () {
        // Fecha o modal
        $(".modalContainer").fadeOut();
      });
  
      // Impede que o clique no botão "Excluir" feche o modal automaticamente
      event.stopPropagation();
    });
  
    // Evento de clique no botão Denunciar Post
    $(document).on("click", "#denunciarPost", function (event) {
      // Extrair o ID do post a partir do botão clicado
      const buttonId = $(this).attr("id");
      const postId = buttonId.split("_")[1];
      
      // Esconde todos os modais antes de exibir o modal correto
      $(".modalContainer").css("display", "none");  // Esconde todos os modais
      $("#denunciarModal").css("display", "flex");  // Exibe o modal de Denunciar
  
      // Armazenar o ID do post que será denunciado
      const postToReport = postId;
  
      // Quando o usuário clicar em "Denunciar"
      $(".denunciar").on("click", function () {
        // Aqui você pode chamar a função de denunciar o post, usando o `postToReport`
        // Exemplo:
        denunciarPost(postToReport);
        // Fecha o modal
        $(".modalContainer").fadeOut();
      });
  
      // Quando o usuário clicar em "Cancelar"
      $(".cancelar").on("click", function () {
        // Fecha o modal
        $(".modalContainer").fadeOut();
      });
  
      // Impede que o clique no botão "Denunciar" feche o modal automaticamente
      event.stopPropagation();
    });
  
    // Se o usuário clicar fora do modal, fecha ele
    $(document).on("click", function (event) {
      if (!$(event.target).closest(".modalContainer").length) {
        $(".modalContainer").fadeOut();
      }
    });
  });
  
  // Função para excluir o post (simulação)
  function excluirPost(postId) {
    console.log(`Post ${postId} excluído com sucesso!`);
    // Aqui você adicionaria a lógica de excluir o post do servidor (ajax, por exemplo)
  }
});
