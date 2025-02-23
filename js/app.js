const hamburger = document.querySelector(".hamburger");
const nav = document.querySelector(".nav");
hamburger.addEventListener("click", () => nav.classList.toggle("active"));

/* Modal destaque */
const span = document.querySelector("span")
const modal = document.querySelector("dialog")
const buttonClose = document.querySelector("dialog button")

span.onmouseover = function () {
    modal.showModal()
}
modal.onmousemove = function () {
    modal.close()
}