function enviarFoto() {
    var select = document.getElementById("comboBox");
    var option = select.value;
    tag.innerHTML = option;
    
    if (select.selectedIndex > 0) {
      div.style.display = "block";
    } else {
          div.style.display = "none";
      }
  }
document.querySelector('#file').addEventListener('change', function () {
document.querySelector('.text').textContent = this.files[0].name;
});
