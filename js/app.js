const hamburger = document.querySelector(".hamburger");
const nav = document.querySelector(".nav");
hamburger.addEventListener("click", () => nav.classList.toggle("active"));

/* Modal destaque */
function btnAutor() {
    var element = document.getElementById("secao");
    element.classList.add("segundo-plano");
}
function btnFechar() {
    var element = document.getElementById("secao");
    element.classList.remove("segundo-plano");
}

function btnAno() {
    var element = document.getElementById("secaoUm");
    element.classList.add("segundo-plano");
}
function btnAnoF() {
    var element = document.getElementById("secaoUm");
    element.classList.remove("segundo-plano");
}

function btnAnoI() {
    var element = document.getElementById("secaoDois");
    element.classList.add("segundo-plano");
}
function btnAnoIF() {
    var element = document.getElementById("secaoDois");
    element.classList.remove("segundo-plano");
}