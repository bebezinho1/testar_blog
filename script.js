// Rolagem suave para âncoras
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute("href")).scrollIntoView({
      behavior: "smooth",
    });
  });
});

// Captura o parâmetro da URL (para Formspree)
const urlParams = new URLSearchParams(window.location.search);
if (urlParams.has("success")) {
  alert("Mensagem enviada com sucesso!");
  window.history.replaceState({}, document.title, window.location.pathname);
}

// Menu Hambúrguer Responsivo
document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.querySelector(".menu-toggle");
  const menuItems = document.querySelector(".menu-items");

  menuToggle.addEventListener("click", function () {
    menuItems.classList.toggle("active");
  });

  // Fechar o menu ao clicar em um item
  document.querySelectorAll(".menu-items a").forEach((item) => {
    item.addEventListener("click", function () {
      menuItems.classList.remove("active");
    });
  });
});

window.addEventListener("scroll", function () {
  let menu = document.querySelector(".menu");

  if (window.scrollY > 50) {
    menu.classList.add("menu-scroll");
  } else {
    menu.classList.remove("menu-scroll");
  }
});
