function openMenu() {
  const menu = document.querySelector('.header-wrapper');
  const menuHamb = document.querySelector('.menu-hamb');
  const closeMenu = document.querySelector('.close-menu');
  const menuContentImg = document.querySelector('.header-alinha > img');
  const menuLinks = document.querySelectorAll('.menu a');
  const menuMidias = document.querySelector('.header-midias');

  let menuOpen = false;

  if (!menu || !menuHamb) return null;

  menuHamb.addEventListener('click', menuControl);

  closeMenu.addEventListener('click', menuControl);

  function menuControl(e) {
    e.preventDefault();

    if (!menuOpen) {
      menuOpen = true;
      
      menu.classList.add('ativo');
      menuHamb.classList.add('ativo');

      const content = setTimeout(() => {
        menuContentImg.classList.add('ativo');
      }, 1500);

      menuLinks.forEach((menu, index) => {
        const timeVariation = 1800 + (200 * index);

        console.log(timeVariation)

        const links = setTimeout(() => {
          menu.classList.add('ativo');
        }, timeVariation);
      });

      const midias = setTimeout(() => {
        menuMidias.classList.add('ativo');
      }, 2600);
    } else {
      menuHamb.classList.remove('ativo');
      menuMidias.classList.remove('ativo');
      
      const closeImg = setTimeout(() => menuContentImg.classList.remove('ativo'), 1500);

      menuLinks.forEach((menu, index) => {
        const timeVariation = 300 + (200 * index);

        console.log(timeVariation)

        const links = setTimeout(() => {
          menu.classList.remove('ativo');
        }, timeVariation);
      }); 

      const closeMenu = setTimeout(() => {
        menuOpen = false;

        menu.classList.remove('ativo');
        closeMenu.classList.remove('ativo');
      }, 2600)
    }
  }
}
openMenu();
