document.addEventListener("DOMContentLoaded", () => {
    const modal = document.querySelector(".modalAddAdm");
    const openBtn = document.getElementById("AddAdm");
    const cancelBtn = document.querySelector(".cancelar");

    openBtn.addEventListener("click", () => {
        modal.style.display = "flex";
    });

    cancelBtn.addEventListener("click", () => {
        modal.style.display = "none";
    });

    // Fechar ao clicar fora do conteúdo
    window.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.style.display = "none";
        }
    });
});
