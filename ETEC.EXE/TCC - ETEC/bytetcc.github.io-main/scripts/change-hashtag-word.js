let nomes = ["iniciantes", "desenvolvedores", "professores", "tech-recruiters", "gestores-de-projeto", "entusiastas-da-computação"];
textSequence(0);
function textSequence(i) {

    if (nomes.length > i) {
        setTimeout(function() {
            document.querySelector("#hashtag-text > i").innerHTML = "#" + nomes[i];
            textSequence(++i);
        }, 2000);

    } else if (nomes.length == i) {
        textSequence(0);
    }

}