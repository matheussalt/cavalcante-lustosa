function openMenu() {
  const menu = document.querySelector(".header-wrapper");
  const menuHamb = document.querySelector(".menu-hamb");
  const closeMenu = document.querySelector(".close-menu");
  const body = document.querySelector("body");
  let ativo = 0;

  if (!menu || !menuHamb) return null;

  menuHamb.addEventListener("click", (e) => {
    e.preventDefault();

    menu.classList.toggle("ativo");
    menuHamb.classList.toggle("ativo");

    closeMenu.addEventListener("click", (e) => {
      menu.classList.remove("ativo");
      closeMenu.classList.remove("ativo");
    });
  });
}
openMenu();
