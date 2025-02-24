const hamburger = document.querySelector(".hamburger");
const nav = document.querySelector(".nav");
hamburger.addEventListener("click", () => nav.classList.toggle("active"));

/* Modal destaque */
function showModal() {
    var element = document.getElementById("modal");
    element.classList.add("show-modal");
}
function hideModal() {
    var element = document.getElementById("modal");
    element.classList.remove("show-modal");
}
function primeiroModal() {
    var element = document.getElementById("modal1");
    element.classList.add("show-modal");
}
function segundoModal() {
    var element = document.getElementById("modal1");
    element.classList.remove("show-modal");
}