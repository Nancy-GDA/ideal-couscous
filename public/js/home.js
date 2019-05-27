// Elementos html referencia del modal
const $modalLogin = document.getElementById("modal-login");
const $modalRegistry = document.getElementById("modal-registry");
const $closeLogin = document.getElementById("close-login");
const $closeRegistry = document.getElementById("close-registry");

const $btnLogin = document.getElementById("btn-iniciar");
const $btnRegistry = document.getElementById("btn-registro");

// Mostrar modal login
$btnLogin.addEventListener("click", function() {
  $modalLogin.classList.add("active");
});
// Mostrar modal registro
$btnRegistry.addEventListener("click", function() {
  $modalRegistry.classList.add("active");
});

// Cerrar modal login
$closeLogin.addEventListener("click", function() {
  $modalLogin.classList.remove("active");
});
// Cerrar modal registro
$closeRegistry.addEventListener("click", function() {
  $modalRegistry.classList.remove("active");
});
