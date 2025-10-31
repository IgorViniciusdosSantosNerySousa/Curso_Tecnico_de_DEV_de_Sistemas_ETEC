function toggleMenu() {
  const menuBtn = document.querySelector('.btnMenu');
  const nav = document.getElementById('nav');
  menuBtn.classList.toggle('open');
  nav.classList.toggle('open');
}

function Pesquisar() {
  const searchBar = document.querySelector('.searchBar'); 
  const abrirMenuPesquisar = document.querySelector('.btnMenu');
  const options = document.querySelectorAll(".options");

  abrirMenuPesquisar.addEventListener('click', function() {
   
    if (searchBar.style.display === 'none' || searchBar.style.display === '') {
      searchBar.style.display = 'block';

      options.forEach(option => {
        option.style.display = "none";
      });
    } else {
      searchBar.style.display = 'none'; 

      options.forEach(option => {
        option.style.display = "block";
      }); 
    }
  });
}


// Pesquisar();
