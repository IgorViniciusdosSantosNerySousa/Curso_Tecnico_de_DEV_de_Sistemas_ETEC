function toggleMenu() {
    const menuBtn = document.querySelector('.menu-btn');
    const nav = document.getElementById('nav');
    menuBtn.classList.toggle('open');
    nav.classList.toggle('open');
  }