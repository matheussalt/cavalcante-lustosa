function sliderDermato() {
  const buttonLeft = document.querySelector(".prox");
  const buttonRight = document.querySelector(".ant");
  const dermatoCard = document.querySelectorAll(".home-noticia");
  let first = 1;
  let second = 2;

  if (!buttonLeft || !buttonRight || !dermatoCard) return null;

  function clickLeft(e) {
    e.preventDefault();

    first = first !== 1 ? first - 1 : 2;
    second = second !== 1 ? second - 1 : 2;

    verifyAndChangeClass();
  }

  function clickRight(e) {
    e.preventDefault();

    first = first !== 2 ? first + 1 : 1;
    second = second !== 2 ? second + 1 : 1;

    verifyAndChangeClass();
  }

  function verifyAndChangeClass() {
    const positions = [first, second];

    dermatoCard.forEach((card, index) => {
      positions.forEach((pos) => {
        card.classList.remove(`cardPosition${pos}`);
      });

      card.classList.add(`cardPosition${positions[index]}`);
    });
  }
  verifyAndChangeClass();

  buttonLeft.addEventListener("click", clickLeft);
  buttonRight.addEventListener("click", clickRight);
}
sliderDermato();
