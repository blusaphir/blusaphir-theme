document.querySelector("#hamburger").addEventListener("click", menu);
function menu () {
  const nav = document.querySelector("#nav");
  const hamburger = document.querySelector("#hamburger");

  if (nav.classList.contains("nav--reveal")) {
    nav.classList.remove("nav--reveal");
    hamburger.classList.remove("hamburger-container-open");
  } else {
    nav.classList.add("nav--reveal");
    hamburger.classList.add("hamburger-container-open");
  }
};
