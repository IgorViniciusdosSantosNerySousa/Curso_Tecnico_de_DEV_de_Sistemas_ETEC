const burger = document.querySelector(".burger");
const menu = document.querySelector("div.header > span.links");

burger.addEventListener('click', () => {
    menu.classList.toggle('exibir');
});