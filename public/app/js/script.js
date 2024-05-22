const loginButton = document.getElementById("login-button");
const modalDialog = document.getElementById("modal-dialog");
loginButton?.addEventListener("click", async () => {
  modalDialog.showModal();
});

console.log("jaja");

function hover(element, img) {
  element.setAttribute("src", img);
}

function unhover(element, img) {
  element.setAttribute("src", img);
}
