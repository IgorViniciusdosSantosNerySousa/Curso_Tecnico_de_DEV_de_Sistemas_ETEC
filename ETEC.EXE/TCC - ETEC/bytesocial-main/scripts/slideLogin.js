let card = document.querySelector(".card");
let loginButton = document.querySelector(".loginButton");
let registerButton = document.querySelector(".registerButton");
let modalOkButton = document.getElementById('modalOkButton');

loginButton.onclick = () => {
  card.classList.remove("registerActive")
  card.classList.add("loginActive")
}

registerButton.onclick = () => {
  card.classList.remove("loginActive")
  card.classList.add("registerActive")
}

modalOkButton.onclick = () => {
  card.classList.remove("registerActive")
  card.classList.add("loginActive")
}


document.addEventListener('DOMContentLoaded', function () {
    const modalOkButton = document.getElementById('modalOkButton');
    const modalContainer = document.getElementById('modalContainer');

    if (modalOkButton) {
      modalOkButton.addEventListener('click', function () {
        modalContainer.style.display = 'none';
      });
    }
  });
