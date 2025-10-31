let card = document.querySelector(".card");
let loginButton = document.querySelector(".loginButton");
let registerButton = document.querySelector(".registerButton");

loginButton.onclick = () => {
card.classList.remove("registerActive")
card.classList.add("loginActive")
}

registerButton.onclick = () => {
card.classList.remove("loginActive")
card.classList.add("registerActive")
}