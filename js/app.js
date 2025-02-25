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

function btnEni() {
    var element = document.getElementById("secaoTres");
    element.classList.add("segundo-plano");
}
function btnEniF() {
    var element = document.getElementById("secaoTres");
    element.classList.remove("segundo-plano");
}

function btnV() {
    var element = document.getElementById("secaoQuatro");
    element.classList.add("segundo-plano");
}
function btnvF() {
    var element = document.getElementById("secaoQuatro");
    element.classList.remove("segundo-plano");
}

function btnJn() {
    var element = document.getElementById("secaoCinco");
    element.classList.add("segundo-plano");
}
function btnJnF() {
    var element = document.getElementById("secaoCinco");
    element.classList.remove("segundo-plano");
}

function btnAnoJn() {
    var element = document.getElementById("secaoSeis");
    element.classList.add("segundo-plano");
}
function btnAnoJnF() {
    var element = document.getElementById("secaoSeis");
    element.classList.remove("segundo-plano");
}

function btnAm() {
    var element = document.getElementById("secaoSete");
    element.classList.add("segundo-plano");
}
function btnAmF() {
    var element = document.getElementById("secaoSete");
    element.classList.remove("segundo-plano");
}

function btnAmAno() {
    var element = document.getElementById("secaoOito");
    element.classList.add("segundo-plano");
}
function btnAmAnoF() {
    var element = document.getElementById("secaoOito");
    element.classList.remove("segundo-plano");
}

function btnHm() {
    var element = document.getElementById("secaoNove");
    element.classList.add("segundo-plano");
}
function btnHmF() {
    var element = document.getElementById("secaoNove");
    element.classList.remove("segundo-plano");
}